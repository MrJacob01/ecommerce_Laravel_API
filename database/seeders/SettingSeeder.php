<?php

namespace Database\Seeders;

use App\Enums\SettingType;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{

    public function run(): void
    {
        $setting = Setting::create([
            'name'=> [
                'uz'=>'Til',
                'en'=>'Language'
            ],
            'type'=>SettingType::SELECT->value
        ]);

        $setting->values()->create([
            'name'=> [
                'uz'=>"O'zbekcha",
                'en'=>'Uzb'
            ]
        ]);

        $setting->values()->create([
            'name'=> [
                'uz'=>"Ingliz",
                'en'=>'English'
            ]
        ]);


        


        $setting = Setting::create([
            'name'=> [
                'uz'=>'tema',
                'en'=>'Theme'
            ],
            'type'=>SettingType::SELECT->value
        ]);


        $setting->values()->create([
            'name'=> [
                'uz'=>"Qora",
                'en'=>'Dark'
            ]
        ]);
        




        $setting = Setting::create([
            'name'=> [
                'uz'=>'pul birligi',
                'en'=>'currence'
            ],
            'type'=>SettingType::SELECT->value
        ]);


        $setting->values()->create([
            'name'=> [
                'uz'=>"som",
                'en'=>'sum'
            ]
        ]);

        $setting->values()->create([
            'name'=> [
                'uz'=>"dollar",
                'en'=>'dollar'
            ]
        ]);
    }
}
