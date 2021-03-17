<?php

declare(strict_types=1);

use Osm\Runtime\Apps;
use Osm\Shop\Samples\App;
use function Osm\handle_errors;

require 'vendor/autoload.php';
umask(0);
handle_errors();

try {
    Apps::$project_path = dirname(__DIR__);
    Apps::compile(App::class);
    Apps::run(Apps::create(App::class), function(App $app) {
        $app->migrations()->up();
    });
}
catch (Throwable $e) {
    echo "{$e->getMessage()}\n{$e->getTraceAsString()}\n";
    throw $e;
}