<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id'     => '',//'131612514181060pp',
        'client_secret' => '',//'3aeccd5339be9852286096bb9c92a03b',
        'redirect'      => '',//'http://evrica-lab-srl.evrica.dev/backend/api/login/facebook/callback'
    ],

    'google' => [
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => ''
    ],

    'twitter' => [
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => ''
    ],

    'linkedIn' => [
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => ''
    ],

    'github' => [
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => ''
    ],

];
