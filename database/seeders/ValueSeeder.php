<?php

namespace Database\Seeders;
use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attribute = Attribute::find(1);
        
        $attribute->values()->create([
            "name"=>[
                'uz'=>"Kola",
                'en'=>"Cola"
            ],

        ]);
        $attribute->values()->create([
            "name"=>[
                'uz'=>"Katta",
                'en'=>"Big"
            ],

        ]);
        $attribute->values()->create([
            "name"=>[
                'uz'=>"amerika",
                'en'=>"american"
            ],

        ]);
    }
}
