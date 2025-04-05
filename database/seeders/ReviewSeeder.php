<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'user_id'=>2,
            'product_id'=>8,
            'describtion'=>"Juda ajoyib tovar",
            'rate'=>4.5,
        ]);
    }
}
