<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('products')->get()->count() == 0){
            $products = [
                [
                    'name' => 'Forever classic sport syntetic',
                    'price' => 86800,
                    'amount' => 23,
                    'category_id' => 1,
                    'brand_id' => 1
                ],
                [
                    'name' => 'J12VERCAR71CX',
                    'price' => 304590,
                    'amount' => 15,
                    'category_id' => 1,
                    'brand_id' => 2
                ],
                [
                    'name' => 'Sagittaire Polynox',
                    'price' => 726805,
                    'amount' => 5,
                    'category_id' => 1,
                    'brand_id' => 2
                ],
                [
                    'name' => 'Impact plus carbine',
                    'price' => 857500,
                    'amount' => 7,
                    'category_id' => 2,
                    'brand_id' => 2
                ],
                [
                    'name' => 'IMPACT NT ONE',
                    'price' => 696325,
                    'amount' => 3,
                    'category_id' => 2,
                    'brand_id' => 2
                ],
                [
                    'name' => 'Compound crossbow',
                    'price' => 353000,
                    'amount' => 6,
                    'category_id' => 9
                ],
                [
                    'name' => 'Man-Kung Crossbow',
                    'price' => 62000,
                    'amount' => 12,
                    'category_id' => 9
                ],
                [
                    'name' => 'Arrows 80cm green',
                    'price' => 3200,
                    'amount' => 58,
                    'category_id' => 8
                ],
            ];

            foreach ($products as $product){
                DB::table('products')->insert($product);
            }
        }
    }
}
