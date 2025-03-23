<?php

namespace Database\Seeders;

use App\Models\UserPaymentCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPaymentCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserPaymentCard::create([
            'user_id'=>4,
            'payment_type_id'=> 1,
            'name'=> 'Ravnaq bank',
            'number_card'=> 8600017501750175,
            'exp_date'=> '01.01.2027',
            'holder_name'=> 'unknown',
            'cvv'=> 230,
        ]);
    }
}
