<?php

use Osm\Ui\Menus\Items\Type;

return [
    '#header.menu' => [
        'items' => [
            'content' => [
                'type' => Type::SUBMENU,
                'title' => osm_t("Content"),
                'sort_order' => 10,
                'items' => [
                    'products' => [
                        'type' => Type::LINK,
                        'title' => osm_t("Products"),
                        'url' => osm_url('GET /products/'),
                    ],
                ],
            ],
        ],
    ],
];