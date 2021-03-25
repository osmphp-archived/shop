<?php

declare(strict_types=1);

namespace Osm\Shop\Products\Components;

use Osm\Core\App;
use Osm\Framework\Themes\Blade\Component;

class Layout extends Component
{
    public string $template = 'products::layout';

    public function asset($filename): string {
        global $osm_app; /* @var App $osm_app */

        return "{$osm_app->http->base_url}/{$osm_app->theme->name}/{$filename}";
    }
}