<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
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

    'facebook' => [
        'client_id' => '990753178538280',
        'client_secret' => '147f0f18388f2111e7c1f6531c7a7999',
        'redirect' => 'http://127.0.0.1:8000/facebook/callback/',
    ],

    'google' => [
        'client_id' => '10669424949-nltct7f751i0h1leta601k46v5bp2bjh.apps.googleusercontent.com', //USE FROM Google DEVELOPER ACCOUNT
        'client_secret' => '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', //USE FROM Google DEVELOPER ACCOUNT
        'redirect' => 'http://127.0.0.1:8000/google/callback/',
    ],

];
