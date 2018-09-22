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
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'firebase' => [

        'api_key' => 'AIzaSyDRo21d4vCIcx1Cz201ls9wUpnys_4rOXE',
        'auth_domain' => 'smsitp-4bee4.firebaseapp.com',
        'database_url' => 'https://smsitp-4bee4.firebaseio.com',
        'secret' => 'kBHr2o2cQTuPcaydWKpKnBka0625tZNDUDt5u2Sj',
        'storage_bucket' => 'smsitp-4bee4.appspot.com',
        'projectId'=> 'smsitp-4bee4',
        'messagingSenderId'=>'163517869682'
    ]
];
