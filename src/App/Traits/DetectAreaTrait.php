<?php

namespace Osm\Shop\App\Traits;

use Osm\Core\App;
use Osm\Framework\Http\Url;

trait DetectAreaTrait
{
    protected function around_around(callable $proceed, callable $next) {
        global $osm_app; /* @var App $osm_app */

        $request = $osm_app->request;

        // fun fact: you can't use 'backend' as area URL key, as it is
        // asset directory name recognized in Nginx configuration
        $urlKey = 'admin';

        // base URL is taken from settings or from incoming request. If base
        // URL is specified in settings and incoming URL is different, not
        // allow into backend area
        $baseUrl = (string)$osm_app->settings->base_url ?: $request->base;
        if ($request->base !== $baseUrl) {
            return $proceed($next);
        }

        // if incoming area doesn't start with backend ares URL key, don't
        // allow into backend
        if (mb_strpos($request->route, "/{$urlKey}") !== 0) {
            return $proceed($next);
        }

        $osm_app->area = 'backend';
        $osm_app->area_->setUrl(Url::new([
            // area's route base URL is later used for detating incoming route
            // and for URL generation
            'route_base_url' => "/{$urlKey}",
        ]));

        return $next();
    }

}