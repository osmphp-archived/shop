<?php

namespace Osm\Shop\Products\Controllers;

use Osm\Framework\Http\Controller;

class Backend extends Controller
{

    public function productsPage() {
        return osm_layout('products', [
            '#page' => [
                'title' => osm_t("Products"),
            ],
            // bind data to views
        ]);
    }

    public function editPage() {
        return osm_layout('products_edit', [
            '#page' => [
                'title' => osm_t("[page title]"),
            ],
            // bind data to views
        ]);
    }
}