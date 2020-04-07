<?php

use Osm\Ui\MenuBars\Views\Header;
use Osm\Ui\Menus\Items\Type;

return [
    '#page' => [
        'header' => Header::new([
            'id' => 'header',
            'modifier' => '-secondary',
        ]),
    ],
    '#header.menu' => [
        'items' => [
            'home' => [
                'type' => Type::LINK,
                'title' => osm_t("Home"),
                'url' => osm_url('GET /'),
                'sort_order' => 0,
            ],
        ],
    ],
];