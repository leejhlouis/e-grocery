<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genderId = $this->faker->numberBetween(1, 2);
        $firstName = $genderId == 1 ? $this->faker->firstNameMale : $this->faker->firstNameFemale;
        $lastName = $this->faker->lastName;
        $email = strtolower($firstName[0].$lastName)."@mail.com";
        $password = bcrypt($firstName[0].$lastName.'123');

        return [
            'role_id' => 1,
            'gender_id' => $genderId,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'display_picture_link' => "/storage/pictures/default.jpg",
            'password' => $password,
        ];
    }
}
