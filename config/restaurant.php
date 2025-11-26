<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Restaurant Information
    |--------------------------------------------------------------------------
    |
    | This file contains all the restaurant information that will be used
    | throughout the application.
    |
    */

    'name' => env('RESTAURANT_NAME', 'Seabud Restaurant'),

    'email' => env('RESTAURANT_EMAIL', 'info@domainname.com'),

    'phone' => env('RESTAURANT_PHONE', '+(123) 465-789'),

    'address' => env('RESTAURANT_ADDRESS', '2972 Westheimer Rd. Santa Ana, Illinois 85486'),

    'footer_description' => "We're here to flip the script on traditional baking. Think bold flavor combos",

    /*
    |--------------------------------------------------------------------------
    | Working Hours
    |--------------------------------------------------------------------------
    */
    'working_hours' => [
        'weekdays' => [
            'days' => 'Monday - Friday',
            'hours' => '8:00 AM - 8:00 PM',
        ],
        'saturday' => [
            'days' => 'Saturday',
            'hours' => '9:00 AM - 6:00 PM',
        ],
        'sunday' => [
            'days' => 'Sunday',
            'hours' => 'Closed',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Social Media Links
    |--------------------------------------------------------------------------
    */
    'social' => [
        'facebook' => env('SOCIAL_FACEBOOK', '#'),
        'instagram' => env('SOCIAL_INSTAGRAM', '#'),
        'twitter' => env('SOCIAL_TWITTER', '#'),
        'pinterest' => env('SOCIAL_PINTEREST', '#'),
        'dribbble' => env('SOCIAL_DRIBBBLE', '#'),
        'linkedin' => env('SOCIAL_LINKEDIN', '#'),
    ],

];
