<?php

namespace Database\Seeders;

use App\Models\orders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        orders::create([
            'city' => 'nablus',
            'address' =>'old city',
            'status' => 'In Progress',
            'name' => 'Hussam Barham',
            'shop_id' => '1',
            'user_id' => '3',
        ]);

        orders::create([
            'city' => 'ramallah',
            'address' =>'center city',
            'name' => 'zena ata',
            'status' => 'In Progress',
            'shop_id' => '1',
            'user_id' => '4',
        ]);


        orders::create([
            'city' => 'nablus',
            'address' =>'old city',
            'name' => 'Shahd Sukam',
            'status' => 'In Progress',
            'shop_id' => '2',
            'user_id' => '5',
        ]);

    }
}
