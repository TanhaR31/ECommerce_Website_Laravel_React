<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SellerOrderDetail;

class SellerOrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SellerOrderDetail::factory()->create([
            'o_id'=>1,
            'p_id'=>1,
            'qty'=>1,
            'unit_price'=>800,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00',
        ]);
        \App\Models\SellerOrderDetail::factory()->create([
            'o_id'=>2,
            'p_id'=>3,
            'qty'=>1,
            'unit_price'=>20020,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00',
        ]);
        \App\Models\SellerOrderDetail::factory()->create([
            'o_id'=>3,
            'p_id'=>4,
            'qty'=>1,
            'unit_price'=>1510,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00',
        ]);
        \App\Models\SellerOrderDetail::factory()->create([
            'o_id'=>3,
            'p_id'=>6,
            'qty'=>1,
            'unit_price'=>130,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00',
        ]);
        \App\Models\SellerOrderDetail::factory()->create([
            'o_id'=>4,
            'p_id'=>5,
            'qty'=>1,
            'unit_price'=>20410,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00',
        ]);
        \App\Models\SellerOrderDetail::factory()->create([
            'o_id'=>5,
            'p_id'=>1,
            'qty'=>1,
            'unit_price'=>800,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00',
        ]);
        \App\Models\SellerOrderDetail::factory()->create([
            'o_id'=>5,
            'p_id'=>1,
            'qty'=>1,
            'unit_price'=>800,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00',
        ]);
        \App\Models\SellerOrderDetail::factory()->create([
            'o_id'=>5,
            'p_id'=>1,
            'qty'=>1,
            'unit_price'=>800,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00',
        ]);
        \App\Models\SellerOrderDetail::factory()->create([
            'o_id'=>6,
            'p_id'=>1,
            'qty'=>1,
            'unit_price'=>800,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00',
        ]);
        
    }
}
