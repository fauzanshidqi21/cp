<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Fauzan',
            'email' => 'fauzan@gmail.com',
            'password' => bcrypt('fauzan123'),
        ];

        User::insert($user);
    }
}
