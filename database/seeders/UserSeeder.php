<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Aidul Fetjri',
            'username' => 'aidulfetjri',
            'email' => 'aidul@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'superadmin',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Syabila Ramadhani',
            'username' => 'bilaramadhani',
            'email' => 'syabila14@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'mingan',
            'username' => 'ngan',
            'email' => 'ming@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'author',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Nak',
            'username' => 'nak',
            'email' => 'ber@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'user',
            'remember_token' => Str::random(10),
        ]);

          User::factory(4)->create();
    }
}
