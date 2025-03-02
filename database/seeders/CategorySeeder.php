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
        Category::create ([
            'name'=>[
                'uz'=>'Ichimliklar',
                'en'=>'Drinks'
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
