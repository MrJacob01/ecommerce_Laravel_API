<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserSeedr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'username'=>'admin',
            'firstname'=>'adminov',
            'lastname'=>'admin',
            'email'=>'adminagmail.com',
            'phone'=>'+998901234567',
            'password'=>Hash::make('password'),

        ]);
        $user->roles()->attach(1);

        $user1 = User::create([
            'username'=>'qosim',
            'firstname'=>'qosimov',
            'lastname'=>'qosim',
            'email'=>'qosim@gmail.com',
            'phone'=>'+99891676246',
            'password'=>Hash::make('password'),

        ]);
        $user1->roles()->attach(2);


        User::factory()->count(10)->hasAttached(Role::find(1))->create();

    }
}
