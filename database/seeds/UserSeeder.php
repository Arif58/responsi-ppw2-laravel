<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'level' => 'admin'
        ]);

        User::create([
            'name' => 'arif',
            'email' => 'arif@gmail.com',
            'password' => bcrypt('password'),
            'level' => 'user'
        ]);
    }
}