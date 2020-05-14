<?php

use Osm\Ui\Menus\Views\LinkItem;
use Osm\Ui\Menus\Views\SubmenuItem;

return [
    '#top_menu.items' => [
        'content' => SubmenuItem::new([
            'title' => osm_t("Content"),
            'sort_order' => 10,
            'items' => [
                'products' => LinkItem::new([
                    'title' => osm_t("Products"),
                    'url' => osm_url('GET /products/'),
                ]),
            ],
        ]),
    ],
];