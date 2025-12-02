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

    'name' => env('RESTAURANT_NAME', 'Kapadokya.Com.Ua'),

    'email' => env('RESTAURANT_EMAIL', 'kapadokyarestoran2018@gmail.com'),

    'phone' => env('RESTAURANT_PHONE', '+380 63 073 3434'),

    'address' => env('RESTAURANT_ADDRESS', 'Бульвар Лесі Українки, 34, Kyiv, Ukraine'),

    'footer_description' => "",

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
