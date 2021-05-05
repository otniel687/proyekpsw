<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
               'name'=>'ini akun Admin',
               'email'=>'admin@example.com',
                'level'=>'admin',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60),
            ],
            [
                'username' => 'user',
               'name'=>'ini akun Mekanik (non admin)',
               'email'=>'user@example.com',
                'level'=>'mekanik',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60),
            ],
            [
                'username' => 'otniel',
               'name'=>'ini akun Mekanik (non admin)',
               'email'=>'otniel@example.com',
                'level'=>'mekanik',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60),
            ],
            [
                'username' => 'naruto',
               'name'=>'ini akun Mekanik (non admin)',
               'email'=>'naruto@example.com',
                'level'=>'mekanik',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60),
            ],
            [
                'username' => 'sasuke',
               'name'=>'ini akun Customer (non admin)',
               'email'=>'sasuke@example.com',
                'level'=>'pelanggan',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60),
            ],
            [
                'username' => 'sakura',
               'name'=>'ini akun Customer (non admin)',
               'email'=>'sakura@example.com',
                'level'=>'pelanggan',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
