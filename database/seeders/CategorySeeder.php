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
                    'name' => 'Weapon'
                ],
                [
                    'name' => 'Smoothbore weapon',
                    'category_id' => 1
                ],
                [
                    'name' => 'Rifled weapons',
                    'category_id' => 1
                ],
                [
                    'name' => 'Combined weapon',
                    'category_id' => 1
                ],
                [
                    'name' => 'Pneumatic weapon',
                    'category_id' => 1
                ],
                [
                    'name' => 'Gas weapon',
                    'category_id' => 1
                ],
                [
                    'name' => 'Commission (used) weapon',
                    'category_id' => 1
                ],
                [
                    'name' => 'Bows, Crossbows, Arrows',
                    'category_id' => 1
                ],
                [
                    'name' => 'Arrows for crossbow and bow',
                    'category_id' => 8
                ],
                [
                    'name' => 'Crossbows',
                    'category_id' => 8
                ],
                [
                    'name' => 'Luke',
                    'category_id' => 8
                ],
                [
                    'name' => 'Shooting accessories',
                    'category_id' => 8
                ]
            ];

            foreach ($categories as $category){
                DB::table('categories')->insert($category);
            }
        }
    }
}
