<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email,
            'phone_number' => $this->faker->phoneNumber,
            'city' => $this->faker->city,
        ];
    }
}
// $factory->define(App\Person::class, function (Faker $faker) {
//     return [
//         'first_name' => $faker->firstName,
//         'last_name' => $faker->lastName,
//         'email' => $faker->email,
//         'phone_number' => $faker->phoneNumber,
//         'city' => $faker->city,
//     ];
// });
