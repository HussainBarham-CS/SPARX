<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Shopper extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        User::create([
            'id' => '3',
            'name' => 'ameen',
            'email' => 'ameen@gmail.com',
            'password' => Hash::make('123456789'),
        ]);

        UserType::create([
            'id' => '3',
            'type' => 'shopper',
            'user_id' => '3'
        ]);

        User::create([
            'id' => '4',
            'name' => 'anas',
            'email' => 'anas@gmail.com',
            'password' => Hash::make('123456789'),
        ]);

        UserType::create([
            'id' => '4',
            'type' => 'shopper',
            'user_id' => '4'
        ]);


        User::create([
            'id' => '5',
            'name' => 'zena',
            'email' => 'zena@gmail.com',
            'password' => Hash::make('123456789'),
        ]);

        UserType::create([
            'id' => '5',
            'type' => 'shopper',
            'user_id' => '5'
        ]);

    }
}
