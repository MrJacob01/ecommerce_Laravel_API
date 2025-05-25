<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $user = User::create([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@ecom.uz',
            'phone' => '+99999999',
            'password' => Hash::make('secret'),
        ]);
         $user->assignRole('admin');

         $user = User::create([
            'firstname' => 'Qosim',
            'lastname' => 'Qobilova',
            'email' => 'qosim@gmail.com',
            'phone' => '+9999989998',
            'password' => Hash::make('password'),
        ]);
         $user->assignRole('editor');

         $user = User::create([
            'firstname' => 'Sanjar',
            'lastname' => 'Eshqobilov',
            'email' => 'sanja@gmail.com',
            'phone' => '+99999389998',
            'password' => Hash::make('password'),
        ]);
         $user->assignRole('shop-manager');

         $user = User::create([
            'firstname' => 'Jamila',
            'lastname' => 'Toirova',
            'email' => 'jamila@gmail.com',
            'phone' => '+9567389998',
            'password' => Hash::make('password'),
        ]);
         $user->assignRole('helpdesk-support');

         $user = User::create([
            'firstname' => 'Fazliddin',
            'lastname' => 'Qobilov',
            'email' => 'fazliddin11@gmail.com',
            'phone' => '+999998999',
            'password' => Hash::make('password'),
        ]);
         $user->assignRole('customer');


        $users = User::factory()->count(10)->create();
        foreach ($users as $user){
            $user->assignRole('customer');
        }
    }
}