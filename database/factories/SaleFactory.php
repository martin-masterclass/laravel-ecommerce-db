<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Zufallsdatum zwischen heute und vor 5 Jahren
        $randomDate = Carbon::today()->subDays(rand(0, 365 * 5));

        return [
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ];
    }


}
