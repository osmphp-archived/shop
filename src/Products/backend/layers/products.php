<?php

use Osm\Framework\Views\Views\Container;

return [
    '@include' => ['page'],
    '#page' => [
        'modifier' => '-products',
        'content' => Container::new([
            'id' => 'content',
            'views' => [
                // add page-specific views here
            ],
        ]),
    ],
];