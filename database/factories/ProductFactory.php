<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'information' => $this->faker->realText,
            'price' => $this->faker->numberBetween(10, 100000),
            'is_selling' => $this->faker->numberBetween(0,1),
            'sort_order' => $this->faker->randomNumber,
            'shop_id' => $this->faker->numberBetween(1,2),
            'secondary_category_id' => $this->faker->numberBetween(1,6),
            'image1' => $this->faker->numberBetween(1,6),
            'image2' => $this->faker->numberBetween(1,6),
            'image3' => $this->faker->numberBetween(1,6),
            'image4' => $this->faker->numberBetween(1,6),
            ];
    }
}
