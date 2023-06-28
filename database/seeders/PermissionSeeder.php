<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'role_id' => 1,
            'route_id' => 1,
            'status' => 0
        ]);

        DB::table('permissions')->insert([
            'role_id' => 2,
            'route_id' => 1,
            'status' => 0
        ]);
    }
}
