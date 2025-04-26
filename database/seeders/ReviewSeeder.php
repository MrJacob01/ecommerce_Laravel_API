<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $product = Product::find(1);
        $product->reviews()->create([
            'user_id'=>2,
            'describtion'=>"Juda ajoyib tovar",
            'rate'=>5,
        ]);
    }
}
