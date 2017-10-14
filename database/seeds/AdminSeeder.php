<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@classperfume.com',
            'password' => bcrypt('admin'),
        ]);

        $admin->assignRole('admin');

        $client = User::create([
            'name' => 'client',
            'email' => 'client@classperfume.com',
            'password' => bcrypt('password')
        ]);

        $client->assignRole('client');
    }
}
