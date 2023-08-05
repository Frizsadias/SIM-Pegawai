<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@argon.com',
            'password' => bcrypt('secret'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'username' => 'user',
            'firstname' => 'User',
            'lastname' => 'User',
            'email' => 'user@argon.com',
            'password' => bcrypt('secret'),
            'role' => 'user'
        ]);

        DB::table('users')->insert([
            'username' => 'superadmin',
            'firstname' => 'Super',
            'lastname' => 'Admin',
            'email' => 'superadmin@argon.com',
            'password' => bcrypt('secret'),
            'role' => 'superadmin'
        ]);
    }
}
