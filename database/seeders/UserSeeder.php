<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'email' => 'minzwoo1234@gmail.com'
        ], [
            'first_name' => 'Vu',
            'last_name' => 'Minh',
            'email'=>'minzwoo1234@gmail.com',
            'password' => bcrypt('minh1234'),
            'role_id' => 1,
        ]);
    }
}
