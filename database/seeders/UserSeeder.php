<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@pwa.rs',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'editor',
            'email' => 'editor@pwa.rs',
            'password' => Hash::make('editor'),
            'role' => 'editor',
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@pwa.rs',
            'password' => Hash::make('user'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'user2',
            'email' => 'user2@pwa.rs',
            'password' => Hash::make('user2'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'user3',
            'email' => 'user3@pwa.rs',
            'password' => Hash::make('user3'),
            'role' => 'user',
        ]);
    }
}
