<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('categories')->get()->count() == 0){
            $categories = [
                [
                    'name' => 'Smoothbore weapon'
                ],
                [
                    'name' => 'Rifled weapons'
                ],
                [
                    'name' => 'Combined weapon'
                ],
                [
                    'name' => 'Pneumatic weapon'
                ],
                [
                    'name' => 'Gas weapon'
                ],
                [
                    'name' => 'Commission (used) weapon'
                ],
                [
                    'name' => 'Bows, Crossbows, Arrows'
                ],
                [
                    'name' => 'Arrows for crossbow and bow',
                    'category_id' => 7
                ],
                [
                    'name' => 'Crossbows',
                    'category_id' => 7
                ],
                [
                    'name' => 'Luke',
                    'category_id' => 7
                ],
                [
                    'name' => 'Shooting accessories',
                    'category_id' => 7
                ]
            ];

            foreach ($categories as $category){
                DB::table('categories')->insert($category);
            }
        }
    }
}
