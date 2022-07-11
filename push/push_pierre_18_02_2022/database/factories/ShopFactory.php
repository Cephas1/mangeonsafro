<?php

namespace Database\Factories;

use App\Models\CategorieShop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
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
            'web_site' => $this->faker->unique()->url(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'categorie_shop_id' => $this->faker->numberBetween(1, CategorieShop::count())
        ];
    }
}
