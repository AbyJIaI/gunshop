<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('roles')->get()->count() == 0){
            $roles = [
                [
                    'name' => 'admin'
                ],
                [
                    'name' => 'moderator'
                ],
                [
                    'name' => 'user'
                ]
            ];

            foreach ($roles as $role){
                DB::table('roles')->insert($role);
            }
        }
    }
}
