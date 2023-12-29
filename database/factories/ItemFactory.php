<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product = Product::inRandomOrder()->first();
        return [
            'sale_id' => Sale::inRandomOrder()->first()->id,
            'amount' => $this->faker->numberBetween(1, 10),
            'product_id' => $product->id,
            'product_price' => $product->price,
        ];
    }

}
