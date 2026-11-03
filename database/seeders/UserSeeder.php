<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // File: database/seeders/UserSeeder.php (ganti nilai 'name' di tiga updateOrCreate())
        User::updateOrCreate(
            ['email' => 'admin@pens.ac.id'],
            ['name' => 'Sokrates', 'password' => Hash::make('password'), 'role' => 'admin']
        );

        User::updateOrCreate(
            ['email' => 'petugas1@pens.ac.id'],
            ['name' => 'Pluto', 'password' => Hash::make('password'), 'role' => 'petugas']
        );

        User::updateOrCreate(
            ['email' => 'petugas2@pens.ac.id'],
            ['name' => 'Barnabas', 'password' => Hash::make('password'), 'role' => 'petugas']
        );
    }
}
