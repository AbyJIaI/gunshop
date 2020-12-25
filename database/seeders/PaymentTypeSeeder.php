<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('payment_types')->get()->count() == 0){
            $types = [
                [
                    'name' => 'Cash on delivery (COD)'
                ],
                [
                    'name' => 'Credit/Debit'
                ],
                [
                    'name' => 'Net Banking'
                ]
            ];

            foreach ($types as $type){
                DB::table('payment_types')->insert($type);
            }
        }
    }
}
