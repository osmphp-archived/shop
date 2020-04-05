<?php

namespace Osm\Shop\App\Controllers;

use Osm\Framework\Http\Controller;

class Backend extends Controller
{

    public function homePage() {
        return osm_layout('home', [
            '#page' => [
                'title' => 'Admin',
            ],
            // bind data to views
        ]);
    }
}