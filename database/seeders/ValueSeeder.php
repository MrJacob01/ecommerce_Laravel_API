<?php

namespace Database\Seeders;
use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            "attribute_id"=>1,
            "name"=>json_encode([
                'uz'=>"qizil",
                'en'=>"red"
            ]),

        ]);
        Value::create([
            "attribute_id"=>2,
            "name"=>json_encode([
                'uz'=>"Katta",
                'en'=>"Big"
            ]),

        ]);
        Value::create([
            "attribute_id"=>3,
            "name"=>json_encode([
                'uz'=>"Dsp",
                'en'=>"DSP"
            ]),

        ]);
    }
}
