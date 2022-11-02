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
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$e9y8xla4kMWbAbSJtKGmSuZJ4ckdmzF8l8PF.fo/IiKhtXjX.By8.', // password
            'alamatkirim' => 'Gubeng',
            'notelp' => '081111111'
        ]);
    }
}
