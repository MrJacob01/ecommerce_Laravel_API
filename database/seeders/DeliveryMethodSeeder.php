<?php

namespace Database\Seeders;

use App\Models\delivery_method;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    public function run(): void
    {
        delivery_method::create([
            'name'=> [
                'uz'=>'punkt',
                'en'=>'point'
            ],
            'estimated_time'=>'2',
            'price'=>'0'
        ]);

        delivery_method::create([
            'name'=> [
                'uz'=>'uyga',
                'en'=>'to the door'
            ],
            'estimated_time'=>'1',
            'price'=>'20000'
        ]);
    }
}
