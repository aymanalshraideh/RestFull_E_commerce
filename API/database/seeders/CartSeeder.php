<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            [
            'user_id'=>1,
            'product_id'=>1,
            'product_quantity'=>2,
            'product_price'=>800,

            ],
            [
                'user_id'=>1,
                'product_id'=>1,
                'product_quantity'=>1,
                'product_price'=>600,

            ],
            [
                'user_id'=>1,
                'product_id'=>1,
                'product_quantity'=>2,
                'product_price'=>900,

            ],
            [
                'user_id'=>1,
                'product_id'=>1,
                'product_quantity'=>2,
                'product_price'=>900,

            ]
    ]);
    }
}
