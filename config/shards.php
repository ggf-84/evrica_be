<?php

return [

    'shard_master' => [
        'id' => 0,
        "name" => "dev.evrica.io",
        "ip_address" => "185.92.72.47",
        "country" => null,
        "region" => null,
        "data_center" => null,
        "services" => [
            "mysql" => [
                "name" => "evrica.io",
                "description" => "mysql service",
                "ip_address" => "185.92.72.47",
                "port" => "3306",
                "db_name" => "powerdns",
                "username" => "pdns_api",
                "password" => "B8145hvgah",
                "url" => "https://evrica.io/phpmyadmin"
            ],
        ],
    ],
    'shards' => json_decode(file_get_contents(config_path('jsonShard.js')), true),

];
