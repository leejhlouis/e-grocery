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
        $password = bcrypt(strtoupper($firstName[0]).$lastName.$firstName.'123456');

        return [
            'role_id' => 1,
            'gender_id' => $genderId,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'display_picture_link' => "https://t3.ftcdn.net/jpg/01/09/00/64/360_F_109006426_388PagqielgjFTAMgW59jRaDmPJvSBUL.jpg",
            'password' => $password,
        ];
    }
}
