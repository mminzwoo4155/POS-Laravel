<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RouteSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('routes')->insert([
        //     'route_name' => 'cart.index',
        //     'route_title' => 'view cart'
        // ]);

        // DB::table('routes')->insert([
        //     'route_name' => 'users.index',
        //     'route_title' => 'view all users'
        // ]);

        DB::table('routes')->insert([
            'route_name' => 'users.store',
            'route_title' => 'store new user'
        ]);

        DB::table('routes')->insert([
            'route_name' => 'users.create',
            'route_title' => 'create new user'
        ]);

        DB::table('routes')->insert([
            'route_name' => 'users.show',
            'route_title' => 'show user information'
        ]);

        DB::table('routes')->insert([
            'route_name' => 'users.update',
            'route_title' => 'update user information'
        ]);

        DB::table('routes')->insert([
            'route_name' => 'users.destroy',
            'route_title' => 'delete user'
        ]);

        DB::table('routes')->insert([
            'route_name' => 'users.edit',
            'route_title' => 'edit user information'
        ]);
    }
}
