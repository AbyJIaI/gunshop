<?php

namespace Database\Factories;

use App\Models\Genders;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'login' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'date_of_birth' => $this->faker->date(),
            'password' => bcrypt($this->faker->password),
            'gender_id' => Genders::all()->random(),
            'role_id' => Roles::all()->last(),
        ];
    }
}
