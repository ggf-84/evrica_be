<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Default Queue Driver
      |--------------------------------------------------------------------------
      |
      | Laravel's queue API supports an assortment of back-ends via a single
      | API, giving you convenient access to each back-end using the same
      | syntax for each one. Here you may set the default queue driver.
      |
      | Supported: "sync", "database", "beanstalkd", "sqs", "redis", "null"
      |
     */

    'default' => env('QUEUE_DRIVER', 'rabbitmq'),
    /*
      |--------------------------------------------------------------------------
      | Queue Connections
      |--------------------------------------------------------------------------
      |
      | Here you may configure the connection information for each server that
      | is used by your application. A default configuration has been added
      | for each back-end shipped with Laravel. You are free to add more.
      |
     */

    'connections' => [
        'sync' => [
            'driver' => 'sync',
        ],
        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],
        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
        ],
        'sqs' => [
            'driver' => 'sqs',
            'key' => 'your-public-key',
            'secret' => 'your-secret-key',
            'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
            'queue' => 'your-queue-name',
            'region' => 'us-east-1',
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => 'default',
            'retry_after' => 90,
        ],
        'rabbitmq' => [
            //   'host' => env('RABBITMQ_HOST', '185.92.72.47'),
            'host' => env('RABBITMQ_HOST', '127.0.0.1'),
            'port' => env('RABBITMQ_PORT', '5672'),
            'username' => env('RABBITMQ_USER', 'guest'),
            //'password' => env('RABBITMQ_PASSWORD', '20171102' ),
            'password' => env('RABBITMQ_PASSWORD', 'guest' ),
            'exchange' => env('RABBITMQ_EXCHANGE', 'ws'),
            //queue route key for send
            'output' => env('RABBITMQ_OUTPUT', 'output')
        ],
    ],
    /*
      |--------------------------------------------------------------------------
      | Failed Queue Jobs
      |--------------------------------------------------------------------------
      |
      | These options configure the behavior of failed queue job logging so you
      | can control which database and table are used to store the jobs that
      | have failed. You may change them to any database / table you wish.
      |
     */
    'failed' => [
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],
];
