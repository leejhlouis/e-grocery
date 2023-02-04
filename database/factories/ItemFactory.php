<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_name' => ucfirst($this->faker->words($this->faker->numberBetween(1, 2), true)),
            'item_desc' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(15000, 150000)
        ];
    }
}
