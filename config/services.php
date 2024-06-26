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
//        'client_id'     => env('GOOGLE_CLIENT_ID'),
//        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
//        'redirect'      => env('GOOGLE_REDIRECT')
        'client_id' => '243235186177-opvkatfmdv87darh41kmfmp4grs142bo.apps.googleusercontent.com',
        'client_secret' => 'YGYDIp7igSNM6yxv28cJzNpM',
        'redirect' => 'http://hotel.com/callback'
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_ID'),
        'client_secret' => env('FACEBOOK_SECRET'),
        'redirect' => env('FACEBOOK_URL'),
//        'client_id' => '746301742555862',
//        'client_secret' => '70403a1ff1d1421ea7ea2c8bc276f473',
//        'redirect' => '/auth/facebook/callback',
    ],

];
