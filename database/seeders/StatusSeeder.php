<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
  
    public function run(): void
    {
        Status::create([
            'name'=> [
                'uz'=>'yangi',
                'en'=>'new'
            ],
            'code'=>'001',
            'for'=>'order'
        ]);
        Status::create([
            'name'=> [
                'uz'=>'Tasdiqlandi',
                'en'=>'confirmed'
            ],
            'code'=>'002',
            'for'=>'order'
        ]);
        Status::create([
            'name'=> [
                'uz'=>'Tayorlanvoti',
                'en'=>'In Processing'
            ],
            'code'=>'003',
            'for'=>'order'
        ]);
        Status::create([
            'name'=> [
                'uz'=>"Yo'lda",
                'en'=>'In the way'
            ],
            'code'=>'004',
            'for'=>'order'
        ]);
        Status::create([
            'name'=> [
                'uz'=>'Yetkazildi',
                'en'=>'Completed'
            ],
            'code'=>'005',
            'for'=>'order'
        ]);
        Status::create([
            'name'=> [
                'uz'=>'Bekor qilindi',
                'en'=>'Canceled'
            ],
            'code'=>'006',
            'for'=>'order'
        ]);
        Status::create([
            'name'=> [
                'uz'=>"To\'lov kutilmoqda",
                'en'=>'Waiting payment'
            ],
            'code'=>'007',
            'for'=>'order'
        ]);
    }
}
