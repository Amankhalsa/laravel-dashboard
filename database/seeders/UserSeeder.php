<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'name' => 'Super',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'superadmin',
            ],
            [
                'first_name' => 'Taylor',
                'last_name' => 'Otwell',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ],
            [
                'first_name' => 'User',
                'last_name' => 'Otwell',
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'user',
            ]
        ];

        User::insert($data); 
    }
}
