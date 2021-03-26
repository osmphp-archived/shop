<?php

declare(strict_types=1);

namespace Osm\Shop\Products\Routes\Front;

use Osm\Core\App;
use Osm\Core\Attributes\Name;
use Osm\Framework\Areas\Attributes\Area;
use Osm\Framework\Areas\Front;
use Osm\Framework\Data\Data;
use Osm\Framework\Data\Query;
use Osm\Framework\Http\Route;
use Symfony\Component\HttpFoundation\Response;
use function Osm\view;

/**
 * @property Data $data
 * @property Query $query
 */
#[Area(Front::class), Name('GET /search')]
class Search extends Route
{
    public function run(): Response {
        return new Response((string)view('products::search_page', [
            'searchPhrase' => 'extensions',
            'products' => $this->query->get(),
        ]));
    }

    /** @noinspection PhpUnused */
    protected function get_data(): Data {
        global $osm_app; /* @var App $osm_app */

        return $osm_app->data;
    }

    /** @noinspection PhpUnused */
    protected function get_query(): Query {
        return $this->data->products();
    }
}