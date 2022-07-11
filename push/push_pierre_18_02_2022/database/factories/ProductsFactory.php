<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
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
            'active' => $this->faker->boolean(80),
            'price' => $this->faker->numberBetween(1400, 1000000),
            'shop_id' => $this->faker->numberBetween(1, Shop::count())
        ];
    }
}
