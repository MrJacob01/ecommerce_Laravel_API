<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory()->count(60)->create();

        foreach ($products as $product){
            $product->stocks()->create([
                "quantity"=>rand(6, 10),
                "attributes"=> json_encode([
                    [
                        "attribute_id"=>1,
                        "value_id"=>1
                    ],
                    [
                        "attribute_id"=>2,
                        "value_id"=>2
                    ],
                    [
                        "attribute_id"=>3,
                        "value_id"=>3
                    ]
                ])
                
            ]);
        }

    }
}
