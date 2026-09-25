<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;


    public function run(): void
    {


        User::create([

            'name' => 'Administrator',
            'email' => 'satap@gmail.com',
            'password' =>Hash::make('123456'),
            'role' => 'admin'
        ]);

        User::create([

            'name' => 'operator sekolah',
            'email' => 'operator@gmail.com',
            'password' =>Hash::make('passsword'),
            'role' => 'operator'
        ]);
    }
}
