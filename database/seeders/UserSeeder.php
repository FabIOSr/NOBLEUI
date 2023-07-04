<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SUPER ADMIN User
        User::create([
          'name' => 'Super Admin',
          'email' => 'super@inputtype.com.br',
          'status'=> 'ACTIVE',
          'user_type'=> 'SUPER',
          'password' => bcrypt('password'),
          'email_verified_at' => now(),
        ]);

        // ADMIN User
        User::create([
          'name' => 'Admin',
          'email' => 'admin@inputtype.com.br',
          'status'=> 'ACTIVE',
          'user_type'=> 'ADMIN',
          'password' => bcrypt('password'),
          'email_verified_at' => now(),
        ]);

        // MANAGER User
        User::create([
          'name' => 'Manager',
          'email' => 'manager@inputtype.com.br',
          'status'=> 'ACTIVE',
          'user_type'=> 'MANAGER',
          'password' => bcrypt('password'),
          'email_verified_at' => now(),
        ]);

        // CLIENT User
        User::create([
          'name' => 'Client',
          'email' => 'client@inputtype.com.br',
          'status'=> 'ACTIVE',
          'user_type'=> 'CLIENT',
          'password' => bcrypt('password'),
          'email_verified_at' => now(),
        ]);
    }
}
