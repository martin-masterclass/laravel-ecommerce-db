<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryNames = ['Wohnaccessoires', 'Beleuchtung', 'Heimtextilien', 'Küchenzubehör', 'Badzubehör', 'Büromöbel', 'Schreibtische'];
        return [
            'name' => $this->faker->unique()->randomElement($categoryNames)
        ];
    }
}
