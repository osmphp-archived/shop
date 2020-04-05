<?php

use Osm\Framework\Views\Views\Container;

return [
    '@include' => ['page'],
    '#page' => [
        'modifier' => '-home',
        'content' => Container::new([
            'id' => 'content',
            'views' => [
                // add page-specific views here
            ],
        ]),
    ],
];