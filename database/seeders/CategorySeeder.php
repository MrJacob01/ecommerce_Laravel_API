<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create ([
            'name'=>[
                'uz'=>'Ichimliklar',
                'en'=>'Drinks'
            ],
        ]);

        $category->ChildCategories()->create([
            'name'=>[
                'uz'=>'gazlangan',
                'en'=>'sparked'
            ],
        ]);

        Category::create ([
            'name'=>[
                'uz'=>'Taomlar',
                'en'=>'Foods'
            ],
        ]);

        Category::create ([
            'name'=>[
                'uz'=>'Yengil oziqalar',
                'en'=>'Snacks'
            ],
        ]);
    }
}
