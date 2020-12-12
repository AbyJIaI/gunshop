<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('users')->get()->count() == 0){
            $users = [
                [
                    'id' => 1,
                    'name' => 'Assel',
                    'surname' => 'Kassymzhanova',
                    'login' => 'aselek',
                    'email' => 'aselya@gmail.com',
                    'password' => bcrypt('qwerty123'),
                    'role_id' => 1,
                    'gender_id' => 2
                ],
                [
                    'id' => 2,
                    'name' => 'Abylay',
                    'surname' => 'Amirov',
                    'login' => 'abyl',
                    'email' => 'abylay@gmail.com',
                    'password' => bcrypt('qwerty1'),
                    'role_id' => '1',
                    'gender_id' => 1
                ]
            ];
            foreach ($users as $user){
                DB::table('users')->insert($user);
            }
        }

        \App\Models\User::factory(10)->create();
    }
}
