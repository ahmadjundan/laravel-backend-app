<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(20)->create();

        User::create([
            'name' => 'Ahmad Jundan Sulthoni',
            'email' => 'jundan@gmail.com',
            'phone' => '085123456789',
            'bio' => 'Mahasiswa Teknik Informatika',
            'email_verified_at' => now(),
            'roles' => 'admin',
            'password' => Hash::make('ahmadjundan'),
        ]);

        User::create([
            'name' => 'Super Admin',
            'email' => 'super@gmail.com',
            'phone' => '085123456789',
            'bio' => 'Somebody',
            'email_verified_at' => now(),
            'roles' => 'superadmin',
            'password' => Hash::make('superadmin'),
        ]);
    }
}
