<?php

use Osm\Framework\Sessions\Stores\File;

return [
    'backend' => [
        'class' => File::class,
        'time_to_live' => 30,
        'cookie_name' => 'BACKEND_SESSION',
        'cookie_path' => '/',
        'cookie_domain' => null,
        'cookie_secure' => false,
        'cookie_http_only' => true,
        'cookie_same_site' => null,
    ],
];