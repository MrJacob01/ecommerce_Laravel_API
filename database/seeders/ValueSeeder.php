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
            "name"=>[
                'uz'=>"qizil",
                'en'=>"red"
            ],

        ]);
        Value::create([
            "attribute_id"=>2,
            "name"=>[
                'uz'=>"Katta",
                'en'=>"Big"
            ],

        ]);
        Value::create([
            "attribute_id"=>3,
            "name"=>[
                'uz'=>"Dsp",
                'en'=>"DSP"
            ],

        ]);
    }
}
