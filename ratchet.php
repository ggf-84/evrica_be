<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Ratchet Configuration
    |--------------------------------------------------------------------------
    |
    | Here you can define the default settings for Laravel Ratchet.
    |
    */

    'class'           => \Askedio\LaravelRatchet\PusherExample::class,
    'host'            => '127.0.0.1',
    'port'            => '7000',
    'connectionLimit' => false,
    'throttle'        => [
                            
                            'onOpen'    => '2000:1',
                            'onMessage' => '2000:1',
                         ],
    'abortOnMessageThrottle' => false,
    'blackList'              => collect([]),
    'zmq'                    => [
        'host' => '127.0.0.1',
        'port' => 5555,
      ],
];
