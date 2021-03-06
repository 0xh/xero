<?php

return [
    /*
    |--------------------------------------------------------------------------
    | OAuth
    |--------------------------------------------------------------------------
    */
    'oauth' => [
        /*
        |--------------------------------------------------------------------------
        | Callback URL
        |--------------------------------------------------------------------------
        |
        | Provide a callback URL, or use 'oob' if one isn't required.
        |
        */
        'callback' => env('XERO_CALLBACK', 'http://localhost/xero/public/authorize'),

        /*
        |--------------------------------------------------------------------------
        | Xero application authentication
        |--------------------------------------------------------------------------
        |
        | Before using this service, you'll need to register an applicatin via
        | the Xero developer website. When setting up your application, take
        | note of the consumer key and shared secret, as well as the
        | application type (private, public or partner).
        |
        */
        //'consumer_key' => env('XERO_CUSTOMER_KEY', 'V9H6QKGF5PJTPRBMCZPU0DCHAZOFTM'),
        //'consumer_secret' => env('XERO_CUSTOMER_SECRET', 'C4FKVTE3P42T0YIU4BUJ1CALQJKMJV'),
        'consumer_key' => env('XERO_CUSTOMER_KEY', 'UO1ZZEDBZGNTCFNKR14BLR2QC47BJC'),
        'consumer_secret' => env('XERO_CUSTOMER_SECRET', 'PUJFS7OE299GKZBDY3EYLOTUN7JXIS'),

        /*
        |--------------------------------------------------------------------------
        | RSA keys
        |--------------------------------------------------------------------------
        |
        | Ensure that you have generated the required private and public rsa keys
        | using the guide provided:
        |
        | https://developer.xero.com/documentation/api-guides/create-publicprivate-key
        |
        | Provide the path to the keys on disk or a PEM formatted string
        |
        */
        'rsa_public_key' => file_get_contents(public_path('publickey.cer')),
        'rsa_private_key' => file_get_contents(public_path('privatekey.pem')),
    ],
];
