<?php

declare(strict_types=1);

namespace Osm\Shop\Products\Routes\Front;

use Osm\Core\Attributes\Name;
use Osm\Framework\Areas\Attributes\Area;
use Osm\Framework\Areas\Front;
use Osm\Framework\Http\Route;
use Symfony\Component\HttpFoundation\Response;

#[Area(Front::class), Name('GET /search')]
class Search extends Route
{
    public function run(): Response {
        return new Response((string)\Osm\view('products::search_page'));
    }
}