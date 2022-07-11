<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imageable_id' => $this->faker->numberBetween(1, Products::count()),
            'imageable' => $this->faker->randomElement(['products', 'categories', 'users']),
            'name' => 'images/'.$this->faker->randomElement(['products', 'categories', 'users']).now()
        ];
    }
}
