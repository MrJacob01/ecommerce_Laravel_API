<?php

namespace Database\Seeders;

use App\Models\payment_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{

    public function run(): void
    {
        payment_type::create([
            'name'=>[
                'uz'=>'naqt',
                'en'=>'cash'
            ]
        ]);
        payment_type::create([
            'name'=>[
                'uz'=>'Payme',
                'en'=>'Payme'
            ]
        ]);
        payment_type::create([
            'name'=>[
                'uz'=>'Click',
                'en'=>'Click'
            ]
        ]);
    }
}
