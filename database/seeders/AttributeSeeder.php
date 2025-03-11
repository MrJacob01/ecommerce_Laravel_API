<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attribute::create(['name' => 
            ["en"=>"color", "uz"=>"rang"]
        ]);
        Attribute::create([
            'name' => ["en"=>"size", "uz"=>"o'lcham"]
        ]);
        Attribute::create([
            'name' => ["en"=>"material", "uz"=>"material"]
        ]);
    }
}
