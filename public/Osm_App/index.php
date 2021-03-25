<?php

declare(strict_types=1);

use Osm\Runtime\Apps;
use Osm\App\App;
use function Osm\handle_errors;

require dirname(dirname(__DIR__)) . '/vendor/autoload.php';
umask(0);
handle_errors();

Apps::$project_path = dirname(dirname(__DIR__));
Apps::run(Apps::create(App::class), function(App $app) {
    $app->handleHttpRequest()->send();
});
