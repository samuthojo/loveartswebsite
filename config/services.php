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

    'google' => [
        'client_id' => '539967529242-qmic91qcdv2ou0iekn0ifibb65h79j5c.apps.googleusercontent.com',
        'client_secret' => 'k4_qc5ZtA7iW9ZrAckylv3cr',
        // 'redirect' => 'http://localhost:8000/login/google/callback',
        'redirect' => 'http://2017.loveartstanzania.com/login/google/callback',
        // 'redirect' => 'http://loveartstanzania.com/login/google/callback',

    ],

    'facebook' => [
        'client_id' => '1602716249741191',
        'client_secret' => 'd787d8107bc3f6ca6221b3a8b38b21cb',
        // 'redirect' => 'http://localhost:8000/login/facebook/callback',
        'redirect' => 'http://2017.loveartstanzania.com/login/facebook/callback',
        // 'redirect' => 'http://loveartstanzania.com/login/facebook/callback',
    ],
];
