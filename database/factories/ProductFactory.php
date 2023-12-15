<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $productNames = [
            'Brezn', 'Radi', 'Obazda', 'Leberkas', 'Weißwurst', 'Bierkrug', 'Dirndl', 'Lederhosen',
            'Sofa Inge', 'Regalablage Christian', 'Tischlampe Helga', 'Bürostuhl Manfred', 'Teppich Gerti',
            'Kerzenhalter Sepp', 'Wanduhr Uschi', 'Spiegel Bernd', 'Kissenbezug Liesl', 'Pflanzentopf Fritz',
            'Deckenleuchte Erika', 'Schreibtisch Walter', 'Laptopständer Karin', 'Kaffeemaschine Anton',
            'Bücherregal Max', 'Küchenwaage Elke', 'Müslischale Rudi', 'Vasenset Ute', 'Bilderrahmen Hans',
            // Füge hier weitere Namen hinzu
        ];


        return [
            'category_id' => $this->faker->numberBetween(1, 7),
            'name' => $this->faker->unique()->randomElement($productNames),
            'price' => $this->faker->randomFloat(2, 10, 500)
        ];
    }

}
