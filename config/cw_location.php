<?php

return [
    'layout' => env('CW_LAYOUT', 'meridien::layouts.app'),
    'views' => env('CW_VIEWS', 'location::'),
    'default' => [
        'country' => 1,
        'state' => 1,
        'city' => 1
    ]
];
