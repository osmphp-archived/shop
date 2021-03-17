<?php

declare(strict_types=1);

namespace Osm\Shop\Tests;

use Osm\Shop\Samples\App;
use Osm\Runtime\Apps;
use PHPUnit\Framework\TestCase;

class test_01_users extends TestCase
{
    public function test_internal_api() {
        Apps::run(Apps::create(App::class), function(App $app) {
            // GIVEN a compiled shop sample application with executed migrations

            // WHEN you check the users sheet
            $user = $app->data->users()
                ->whereEquals('name', 'root')
                ->first('name');

            // THEN it has `root` user out of the box
            $this->assertNotNull($user);

        });
    }
}