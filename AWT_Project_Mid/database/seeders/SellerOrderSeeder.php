<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SellerOrder;

class SellerOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SellerOrder::factory()->create([
            'c_id'=>1,
            's_id'=>1,
            'order_status'=>'Delivered',
            'total_price'=>800,
            'payment_status'=>'Paid',
            'payment_method'=>"COD",
            'payment_due'=>0,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerOrder::factory()->create([
            'c_id'=>2,
            's_id'=>1,
            'order_status'=>'Ordered',
            'total_price'=>20020,
            'payment_status'=>'Not Paid',
            'payment_method'=>"COD",
            'payment_due'=>20020,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerOrder::factory()->create([
            'c_id'=>3,
            's_id'=>2,
            'order_status'=>'Error',
            'total_price'=>1640,
            'payment_status'=>'Paid',
            'payment_method'=>"COD",
            'payment_due'=>0,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerOrder::factory()->create([
            'c_id'=>2,
            's_id'=>1,
            'order_status'=>'Ordered',
            'total_price'=>20410,
            'payment_status'=>'Advanced',
            'payment_method'=>"Mobile Payment",
            'payment_due'=>15000,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerOrder::factory()->create([
            'c_id'=>4,
            's_id'=>1,
            'order_status'=>'Returned',
            'total_price'=>2400,
            'payment_status'=>'Not Paid',
            'payment_method'=>"COD",
            'payment_due'=>2400,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerOrder::factory()->create([
            'c_id'=>3,
            's_id'=>1,
            'order_status'=>'Error',
            'total_price'=>800,
            'payment_status'=>'Paid',
            'payment_method'=>"COD",
            'payment_due'=>0,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
    }
}
