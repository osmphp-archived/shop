<?php

use Osm\Ui\Menus\Views\LinkItem;
use Osm\Ui\Menus\Views\MenuBar;

return [
    '#page.items' => [
        'header' => MenuBar::new([
            'id' => 'top_menu',
            'on_color' => 'secondary',
            'horizontal_align' => 'center',
            'sort_order' => 10,
            'items' => [
                'home' => LinkItem::new([
                    'title' => osm_t("Home"),
                    'url' => osm_url('GET /'),
                    'sort_order' => 0,
                ]),
            ],
        ]),
    ],
];