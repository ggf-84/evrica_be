<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Default Filesystem Disk
      |--------------------------------------------------------------------------
      |
      | Here you may specify the default filesystem disk that should be used
      | by the framework. The "local" disk, as well as a variety of cloud
      | based disks are available to your application. Just store away!
      |
     */

    'default' => 'local',
    /*
      |--------------------------------------------------------------------------
      | Default Cloud Filesystem Disk
      |--------------------------------------------------------------------------
      |
      | Many applications store files both locally and in the cloud. For this
      | reason, you may specify a default "cloud" driver here. This driver
      | will be bound as the Cloud disk implementation in the container.
      |
     */
    'cloud' => 's3',
    /*
      |--------------------------------------------------------------------------
      | Filesystem Disks
      |--------------------------------------------------------------------------
      |
      | Here you may configure as many filesystem "disks" as you wish, and you
      | may even configure multiple disks of the same driver. Defaults have
      | been setup for each driver as an example of the required options.
      |
      | Supported Drivers: "local", "ftp", "s3", "rackspace"
      |
     */
    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => public_path('storage'),
        ],
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],
        'public_storage' => [
            'driver' => 'local',
            'root' => public_path('storage'),
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public',
        ],
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_KEY'),
            'secret' => env('AWS_SECRET'),
            'region' => env('AWS_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],
        'products' => [
            'driver' => 'local',
            'root' => public_path('products'),
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public'
        ],
        'data_exchange' => [
            'driver' => 'local',
            'root' => public_path('../webroot/files'),
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public'
        ],
        'chat_attachement' => [
            'driver' => 'local',
            'root' => storage_path('app/public/chatfiles'),
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public'
        ],
        'i18n' => [
            'driver'=>'local',
            'root' => resource_path('lang')
        ]
    ],
];