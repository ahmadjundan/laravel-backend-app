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
        User::factory(5)->create();
        User::create([
            'name' => 'Ahmad Jundan Sulthoni',
            'email' => 'jundan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('ahmadjundan'),
        ]);
    }
}
