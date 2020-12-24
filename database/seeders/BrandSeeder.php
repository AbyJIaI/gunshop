<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('brands')->get()->count() == 0){
            $brands = [
                [
                    'name' => 'Sibergun'
                ],
                [
                    'name' => 'Verney-carron'
                ],
                [
                    'name' => 'Sako'
                ],
                [
                    'name' => 'Norma'
                ],
                [
                    'name' => 'Tikka'
                ]
            ];

            foreach ($brands as $brand){
                DB::table('brands')->insert($brand);
            }
        }
    }
}
