<?php

namespace Database\Seeders;

use App\Models\User;
use Attribute;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            RoleSeeder::class,
            UserSeedr::class,
            AttributeSeeder::class,
            ValueSeeder::class,
            ProductSeeder::class,
            DeliveryMethodSeeder::class,
            PaymentTypeSeeder::class,
            UserPaymentCardSeeder::class
        ]);
    }
}
