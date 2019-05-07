<?php

use Symfony\Component\Process\Process;

$config = [
    //Default path
    'path' => (realpath(dirname(__FILE__))),
    'current_dir' => (realpath(dirname(__FILE__))),
    'file_log' => 'php_unit.json',
];



/**
 * Parameters 
 *  --path      Path to laravel folder, example(/var/www/html/backend)
 *  --commit_hash Hash for commit, used for reverting commit
 *  --email email address used for sendindg logs
 */
$deploy = new Deploy($config);
$deploy->execute();

class Deploy {

    public $config = [];
    public $logs = [];
    public $parameters_key = [
        'path:',
        'commit_hash:',
        'email:'
    ];
    public $reverted = 0;
    public $errors = 0;
    public $migrated = 0;
    public $tests_log = [];

    public function __construct($config) {
        $this->config = $config;
        $this->config = array_merge($this->config, $this->getParameters());
        return $this;
    }

    public function execute() {

        //init laravel
        $this->initLaravel();

        //execute migrations
        $this->importMigration();
        
        if ($this->errors == 0) {
            //run tests
            $this->runTests();
        }
        //set default type for email
        $type = 'ok';

        if ($this->errors > 0) {
            $type = 'errors';
            $this->revertMigrations();
            $this->revertCommit();
        }
        
        $this->sendUserNotification($this->tests_log, $type);

        var_dump($this->logs);
    }

    function importMigration() {
        try {
            $this->logs[] = 'Trying to migrate';
            //get number of executed migrations
            $this->migrated = Illuminate\Support\Facades\Artisan::call('migrate');
            $this->logs[] = 'Executed ' . $this->migrated . ' migrations!';
            $this->importSeeds();
        } catch (Illuminate\Database\QueryException $e) {
            $this->logs[] = 'Migration Error: ' . $e->getMessage();
            $this->errors += 1;
        }
    }

    function importSeeds() {
         try {
            $this->logs[] = 'Trying to migrate seeds';
            //get number of executed migrations
            $seeds = Illuminate\Support\Facades\Artisan::call('db:seed');
            $this->logs[] = 'Executed ' . $seeds . ' seeds!';
        } catch (Illuminate\Database\QueryException $e) {
            $this->logs[] = 'Seeds Error: ' . $e->getMessage();
            $this->errors += 1;
        }
    }

    function revertMigrations() {
        try {
            $this->logs[] = 'Trying to revert migrations' . ($this->errors > 0 ? ' ,after errors!' : '');
            $this->reverted = (Illuminate\Support\Facades\Artisan::call('migrate:rollback'));
            $this->logs[] = 'Reverted ' . $this->reverted . ' migrations';
        } catch (Illuminate\Database\QueryException $e) {
            $this->logs[] = 'Revert errors: ' . $e->getMessage();
            $this->errors += 1;
        }
    }

    function revertCommit() {
        if (!isset($this->config['commit_hash'])) {
            $this->logs[] = 'Error, commit hash not set in configurations!';
            // $this->sendUserNotification(['error' => 'Commit name, not set in configurations'], 'errors');
            $this->errors += 1;
            return;
        }

        $process = new Process('git revert ' . $this->config['commit_hash']);
        $process->start();
        $this->logs[] = 'Reverting commit!';
    }

    /**
     * Execute PHPUnit tests
     * @global type $config
     */
    function runTests() {
        //run tests 
        $process = new Process($this->config['path'] . '/vendor/bin/phpunit --log-json ' . $this->config['current_dir'] . '/' . $this->config['file_log']);
        $process->run();
        $this->logs[] = 'Start tests.....';

        //parse and check test results
        $this->checkTests();
    }

    /**
     * Check results of test
     * @global type $config
     */
    function checkTests() {

        if (file_exists($this->config['current_dir'] . '/' . $this->config['file_log'])) {
            $test_output = file_get_contents($this->config['current_dir'] . '/' . $this->config['file_log']);
            //make valid json
            $json = '[' . str_replace("}{", "},{", $test_output) . ']';
            //parse data from json
            $tests = json_decode($json);
            $failed_tests = [];
            //find all failed tests
            foreach ($tests as $test) {
                if (isset($test->status)) {
                    if ($test->status == 'fail') {
                        $failed_tests[] = $test;
                    }
                }
            }


            //check results for tests
            if (count($failed_tests) > 0) {
                $this->logs[] = 'Tests failed, reverting commit and revert migrations!';
//                $this->sendUserNotification($failed_tests, 'errors');
                $this->errors += 1;
                $this->tests_log = $failed_tests;
            } else {
                //All ok continue
                $this->logs[] = 'All tests executed successfully!';
                //$this->sendUserNotification($tests, 'ok');
                $this->tests_log = $tests;
            }
        } else {
            //   $this->revertMigrations();
            //  $this->revertCommit();
            $this->errors += 1;
            $this->logs[] = 'PHPUnit fails, (system failure)';
        }
    }

    /**
     * Get parameters values
     * @global array $parameters
     * @return type
     */
    function getParameters() {
        return getopt(null, $this->parameters_key);
    }

    /**
     * Init Larave, inspired from /public/index.php
     */
    function initLaravel() {
        //require libraries
        require_once $this->config['path'] . '/bootstrap/autoload.php';
        require_once $this->config['path'] . '/bootstrap/app.php';
        //init Kernel
        $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
        //init system
        $kernel->handle(
                $request = Illuminate\Http\Request::capture()
        );
    }

    function stopScript() {
        $this->logs[] = 'Stopping execution of script!';
        exit();
    }

    /**
     * Send logs to user
     * @global array $config
     * @param object $data
     * @param string $type
     */
    function sendUserNotification($data, $type) {
        $title = $type == 'ok' ? 'Push action confirmed!' : 'Push action denied!';
        $message = '<h3>' . $title . '</h3></br>'
                . '<b>Logs:</b>'
                . '<div class="deploy-logs"><pre><code>' . json_encode($this->logs, JSON_PRETTY_PRINT) . '</code></pre></div>'
                . '<b>' . ($type == 'ok' ? 'Test logs' : 'Failed tests') . ':</b></br>';
        $message .= '<div class="test-logs"><pre><code>' . json_encode($data, JSON_PRETTY_PRINT) . '</code></pre></div>';

        if (isset($this->config['email'])) {
            $this->sendMail($this->config['email'], 'Deploy Report', $message);
        }
    }

    /**
     * Send email
     * @param string $to
     * @param string $subject
     * @param string $message
     */
    function sendMail($to, $subject, $message) {

// message
        $message = '
<html>
<head>
  <title>System deploy report: ' . date('Y-m-d H:i:S') . '</title>
      <style>
      b{
      color:red;
      }
.test-logs{
    width:30%;
    overflow-y:scroll;
    height:300px;
    border:1px solid #f4f4f4;
}

.deploy-logs{
    width:30%;
    overflow-y:scroll;
    height:150px;
    border:1px solid #f4f4f4;
}
</style>
</head>
<body>
  ' . $message . '
</body>
</html>
';

// HTML Content-type header 
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
        $headers .= 'To: ' . $to . "\r\n";
        $headers .= 'From: Evrica Dev <dev@evrica.com>' . "\r\n";

// Mail it
        mail($to, $subject, $message, $headers);
    }

}
