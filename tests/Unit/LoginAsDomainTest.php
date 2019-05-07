<?php

namespace Tests\Unit;

use \Tests\TestCase;
use App\Models\User;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Admin;
use App\Models\Company;
use Illuminate\Support\Facades\Request as RequestFacade;
use App\Models\DomainRecord;

class LoginAsDomainTest extends TestCase
{

    public $userToken;
    public $appEnv;
    public $header;
    public $user;

    public function setUp()
    {
        parent::setUp();

        $getEnv = "production";

        $this->appEnv = $getEnv;
        $this->header = [];

        $this->user = User::where('email', 'test@mail.com')->first();
        $this->header = $this->headers($this->user);

    }

    /**
     * Test auth admin
     * @group authLoginAdmin
     */
    public function testAuthAdmin()
    {

        $adminData = [
            'email' => 'adminfnln@mail.com',
            'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
            'firstname' => 'admin_fn',
            'lastname' => 'admin_ln',
        ];

        $dataLogin = [
            'email' => $adminData['email'],
            'password' => 'test',
        ];

        if ($this->appEnv == "development") {

            $setAdmin = Admin::create($adminData);

            $response = $this->post($this->path . '/auth/admin', $dataLogin, $this->header)
                ->assertSuccessful()
                ->assertJsonStructure(['data' => ['token']]);


            $setAdmin->delete();

        } else {

            $response = $this->post($this->path . '/auth/admin', $dataLogin, $this->header)
                ->assertJsonStructure(['app_code', 'message'])
                ->assertJsonFragment(["message" => "Invalid email or password"]);

        }

    }

    /**
     * Test auth admin and loginAs company
     * @group authLoginAdmin
     */
    public function testAuthAdminLoginAsCompany()
    {
        $adminData = [
            'email' => 'adminfnln@mail.com',
            'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
            'firstname' => 'admin_fn',
            'lastname' => 'admin_ln',
        ];

        $dataLogin = [
            'email' => $adminData['email'],
            'password' => 'test',
        ];


        $dataLoginAs = [
            'company_id' => $this->user['company_id'],
        ];

        if ($this->appEnv == "development") {

            $setAdmin = Admin::create($adminData);

            $response_auth = $this->post($this->path . '/auth/admin', $dataLogin, $this->header)
                ->assertSuccessful()
                ->assertJsonStructure(['data' => ['token']]);


            // dd($response_auth);

            $content = $response_auth->decodeResponseJson();

            $headers['Authorization'] = 'Bearer ' . $content['data']['token'];

            $response = $this->post($this->path . '/auth/admin/loginAs', $dataLoginAs, $headers)
                ->assertSuccessful()
                ->assertJsonStructure(['data' => ['token']]);

            $contentLogout = $response->decodeResponseJson();
            $headerLogout['Authorization'] = 'Bearer ' . $contentLogout['data']['token'];
            $dataLogoutAs = [];

            $response_logout = $this->get($this->path . '/auth/admin/logoutAs', $dataLogoutAs, $headerLogout)
                ->assertSuccessful()
                ->assertJsonFragment(["message" => "Logout success!"]);

            $setAdmin->delete();

        } else {

            $response = $this->post($this->path . '/auth/admin', $dataLogin, $this->header)
                ->assertJsonStructure(['app_code', 'message'])
                ->assertJsonFragment(["message" => "Invalid email or password"]);

        }

    }

    /**
     * Test auth admin and loginAs user
     * @group authLoginAdmin
     */
    public function testAuthAdminLoginAsUser()
    {
        $adminData = [
            'email' => 'adminfnln@mail.com',
            'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
            'firstname' => 'admin_fn',
            'lastname' => 'admin_ln',
        ];

        $dataLogin = [
            'email' => $adminData['email'],
            'password' => 'test',
        ];


        $dataLoginAs = [
            'user_id' => $this->user['id'],
        ];

        if ($this->appEnv == "development") {

            $setAdmin = Admin::create($adminData);

            $response_auth = $this->post($this->path . '/auth/admin', $dataLogin, $this->header)
                ->assertSuccessful()
                ->assertJsonStructure(['data' => ['token']]);


            // dd($response_auth);

            $content = $response_auth->decodeResponseJson();

            $headers['Authorization'] = 'Bearer ' . $content['data']['token'];

            $response = $this->post($this->path . '/auth/admin/loginAs', $dataLoginAs, $headers)
                ->assertSuccessful()
                ->assertJsonStructure(['data' => ['token']]);

            $contentLogout = $response->decodeResponseJson();
            $headerLogout['Authorization'] = 'Bearer ' . $contentLogout['data']['token'];
            $dataLogoutAs = [];

            $response_logout = $this->get($this->path . '/auth/admin/logoutAs', $dataLogoutAs, $headerLogout)
                ->assertSuccessful()
                ->assertJsonFragment(["message" => "Logout success!"]);


            $setAdmin->delete();

            // dd($response_logout);

        } else {

            $response = $this->post($this->path . '/auth/admin', $dataLogin, $this->header)
                ->assertJsonStructure(['app_code', 'message'])
                ->assertJsonFragment(["message" => "Invalid email or password"]);

        }

    }

    /**
     * Test auth admin and loginAs user company
     * @group authLoginAdmin
     */
    public function testAuthAdminLoginAsUserCompany()
    {
        $adminData = [
            'email' => 'adminfnln@mail.com',
            'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
            'firstname' => 'admin_fn',
            'lastname' => 'admin_ln',
        ];

        $dataLogin = [
            'email' => $adminData['email'],
            'password' => 'test',
        ];


        $dataLoginAs = [
            'user_id' => $this->user['id'],
            'company_id' => $this->user['company_id'],
        ];

        if ($this->appEnv == "development") {

            $setAdmin = Admin::create($adminData);

            $response_auth = $this->post($this->path . '/auth/admin', $dataLogin, $this->header)
                ->assertSuccessful()
                ->assertJsonStructure(['data' => ['token']]);


            // dd($response_auth);

            $content = $response_auth->decodeResponseJson();

            $headers['Authorization'] = 'Bearer ' . $content['data']['token'];

            $response = $this->post($this->path . '/auth/admin/loginAs', $dataLoginAs, $headers)
                ->assertSuccessful()
                ->assertJsonStructure(['data' => ['token']]);


            $setAdmin->delete();

        } else {

            $response = $this->post($this->path . '/auth/admin', $dataLogin, $this->header)
                ->assertJsonStructure(['app_code', 'message'])
                ->assertJsonFragment(["message" => "Invalid email or password"]);
        }

    }


    /**
     * Test auth admin and check error
     * @group authLoginAdmin
     */
    public function testAuthAdminLoginAsError()
    {
        $adminData = [
            'email' => 'adminfnln@mail.com',
            'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
            'firstname' => 'admin_fn',
            'lastname' => 'admin_ln',
        ];

        $dataLogin = [
            'email' => $adminData['email'],
            'password' => 'test',
        ];


        $dataLoginAs = [
            'user_id' => $this->user['id'],
            'company_id' => 999,
        ];

        if ($this->appEnv == "development") {

            $setAdmin = Admin::create($adminData);

            $response_auth = $this->post($this->path . '/auth/admin', $dataLogin, $this->header)
                ->assertSuccessful()
                ->assertJsonStructure(['data' => ['token']]);


            // dd($response_auth);

            $content = $response_auth->decodeResponseJson();

            $headers['Authorization'] = 'Bearer ' . $content['data']['token'];

            $response = $this->post($this->path . '/auth/admin/loginAs', $dataLoginAs, $headers)
                ->assertJsonStructure(['app_code', 'message'])
                ->assertJsonFragment(["message" => "Invalid token", "app_code" => 4011]);

            $setAdmin->delete();

            // dd($response);

        } else {

            $response = $this->post($this->path . '/auth/admin', $dataLogin, $this->header)
                ->assertJsonStructure(['app_code', 'message'])
                ->assertJsonFragment(["message" => "Invalid email or password"]);
        }

    }

    /**
     * Test auth  and check error company domain case
     * @group authLoginAdmin
     */
    public function testAuthCompanyError()
    {
        if($this->appEnv == "production"){

          $this->assertTrue(true);

        }
        else{

        $domainToTest = 'evrica.local';
        $currentDomain = RequestFacade::getHttpHost();

        $userEmail = 'test@mail.com';
        $userPassword = 'test';

        $backCompanyData = [
            'title' => 'local everest',
        ];

        if ($this->appEnv == "development") {

            $backDomainData = [
                'name' => $domainToTest,
                'type' => 'A',
                'content' => '185.92.72.47',
                'company_id' => 45,
                'domain_id' => 11,
            ];

            if (DomainRecord::where('name', $domainToTest)->exists()) {
                $delRecord = DomainRecord::where('name', $domainToTest)->delete();
            }

            $dataLogin = [
                'email' => $userEmail,
                'password' => $userPassword,
            ];

            $response = $this->post($this->path . '/auth', $dataLogin, [])
                ->assertJsonStructure(['app_code', 'message'])
                ->assertJsonFragment(["message" => "Invalid email or password"]);


            DomainRecord::create($backDomainData);

            // dd($response);

        } else {

            $response = $this->post($this->path . '/auth/admin', $dataLogin, $this->header)
                ->assertJsonStructure(['app_code', 'message'])
                ->assertJsonFragment(["message" => "Invalid email or password"]);
        }

      }

    }

}
