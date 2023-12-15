<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Rufe jeden Seeder in der benötigten Reihenfolge auf
        $this->call(CategorySeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SaleSeeder::class);
        $this->call(SalesItemSeeder::class);
    }
}
