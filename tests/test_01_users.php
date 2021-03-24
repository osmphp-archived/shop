<?php

declare(strict_types=1);

namespace Osm\Shop\Tests;

use Osm\Shop\Samples\App;
use Osm\Runtime\Apps;
use PHPUnit\Framework\TestCase;

class test_01_users extends TestCase
{
    public function test_root_user() {
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

//    public function test_password() {
//        Apps::run(Apps::create(App::class), function(App $app) {
//            $app->db->dryrun(function() use ($app){
//                // GIVEN a compiled shop sample application with executed migrations
//
//                // WHEN you set `root` user's password
//                $app->data->users()
//                    ->whereEquals('name', 'root')
//                    ->update((object)['password' => '123456']);
//                $password = $app->data->users()
//                    ->whereEquals('name', 'root')
//                    ->value('password');
//                $column = $app->data->users()->sheet->columns['password'];
//
//                // THEN you can't get it in plain text, but you can verify if
//                // a given password equals the one in the database
//                $this->assertNotEquals('123456', $password);
//                $this->assertTrue($column->verify('123456'));
//            });
//        });
//    }
}