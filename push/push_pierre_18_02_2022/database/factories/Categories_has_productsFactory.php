<?php

namespace Database\Factories;

use App\Models\CategorieProduct;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class Categories_has_productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1, Products::count()),
            'categorie_product_id' => $this->faker->numberBetween(1, CategorieProduct::count()),
        ];
    }
}
