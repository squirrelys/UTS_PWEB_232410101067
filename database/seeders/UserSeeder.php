<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $userData = [

            [
                'name'=> 'Keysha',
                'username'=> 'Keyshaa',
                'password'=> bcrypt('12345678')
            ]
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}


// maaf udh connect database duluan ku kira harus connect ke db jadi ku coba belajar connect in ke database deh :(