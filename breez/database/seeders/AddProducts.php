<?php

namespace Database\Seeders;
use App\Models\order_product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        order_product::create([
            'order_id' => '1',
            'product_id' => '1'
        ]);

        order_product::create([
            'order_id' => '1',
            'product_id' => '2'
        ]);

        order_product::create([
            'order_id' => '1',
            'product_id' => '3'
        ]);
        /////////////////////////////////

        order_product::create([
            'order_id' => '2',
            'product_id' => '3'
        ]);

        order_product::create([
            'order_id' => '2',
            'product_id' => '1'
        ]);

        order_product::create([
            'order_id' => '2',
            'product_id' => '2'
        ]);

        /////////////////////////////////

        order_product::create([
            'order_id' => '3',
            'product_id' => '4'
        ]);

        order_product::create([
            'order_id' => '3',
            'product_id' => '5'
        ]);

    }
}
