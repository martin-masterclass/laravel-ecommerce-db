<?php

namespace Database\Seeders;

use App\Models\SalesItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SalesItem::factory()->count(500)->create();
    }
}
