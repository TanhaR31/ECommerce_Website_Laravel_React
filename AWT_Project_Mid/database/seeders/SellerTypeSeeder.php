<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SellerType;

class SellerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SellerType::factory()->create([
            's_id' => 1,
            'st_type' => 'Professional',
            'amount' => 20.000,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerType::factory()->create([
            's_id' => 2,
            'st_type' => 'Normal',
            'amount' => 10.000,
            'created_at'=>'2022-03-11 20:00:00',
            'updated_at'=>'2022-03-11 20:00:00'
        ]);
        
    }
}
