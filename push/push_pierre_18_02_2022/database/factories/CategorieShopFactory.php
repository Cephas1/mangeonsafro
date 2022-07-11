<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph(1),
            'image' => 'images/categories/shops/'.$this->faker->unixTime(),
            //'isActive' => $this->faker->boolean(90)
            'isActive' => $this->faker->randomElement(['0', '1'])
        ];
    }
}
