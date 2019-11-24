<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'facebook' => [
        'client_id' => env('467764400530816'),  // Your Facebook App ID
        'client_secret' => env('5d59abbd8cdffa1a1366466714abcfa9'), // Your Facebook App Secret
        'redirect' => env('http://laravel-myproduct.herokuapp.com/'),
    ],

    'twitter' => [
        'client_id' => env('uE4ru9ej2SjqsvKmW535bBA8z'),  // Your Twitter Client ID
        'client_secret' => env('pBsXQMdW9p9JEjMGisfzNPQHMVWNVo7KPkbX7cZwLTVJM3UYWf '), // Your Twitter Client Secret
        'redirect' => env('http://laravel-myproduct.herokuapp.com/login/twitter/callback'),
    ],

];
