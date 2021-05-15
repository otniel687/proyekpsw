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
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'user',
               'name'=>'ini akun Mekanik (non admin)',
               'email'=>'user@example.com',
                'level'=>'mekanik',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'mekanik1',
               'name'=>'ini akun Mekanik (non admin)',
               'email'=>'mekanik1@example.com',
                'level'=>'mekanik',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'mekanik2',
               'name'=>'ini akun Mekanik (non admin)',
               'email'=>'mekanik2@example.com',
                'level'=>'mekanik',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'mekanik3',
               'name'=>'ini akun Customer (non admin)',
               'email'=>'mekanik3@example.com',
                'level'=>'mekanik',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'mekanik4',
               'name'=>'ini akun Mekanik (non admin)',
               'email'=>'mekanik4@example.com',
                'level'=>'mekanik',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'mekanik5',
               'name'=>'ini akun Customer (non admin)',
               'email'=>'mekanik5@example.com',
                'level'=>'mekanik',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'otniel',
               'name'=>'ini akun Customer (non admin)',
               'email'=>'otniel@example.com',
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
