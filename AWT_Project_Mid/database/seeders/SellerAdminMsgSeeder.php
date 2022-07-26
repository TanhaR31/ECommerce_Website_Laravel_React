<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SellerAdminMsg;

class SellerAdminMsgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SellerAdminMsg::factory()->create([
            's_id' => 1,
            'ad_id' => 1,
            'from' => 'seller',
            'to' => 'admin',
            'msg' => 'Hello Admin',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerAdminMsg::factory()->create([
            's_id' => 1,
            'ad_id' => 1,
            'from' => 'admin',
            'to' => 'seller',
            'msg' => 'Hello Seller :)',
            'created_at'=>'2022-03-11 19:10:00',
            'updated_at'=>'2022-03-11 19:10:00'
        ]);
        \App\Models\SellerAdminMsg::factory()->create([
            's_id' => 1,
            'ad_id' => 1,
            'from' => 'seller',
            'to' => 'admin',
            'msg' => 'Bye',
            'created_at'=>'2022-03-11 19:20:00',
            'updated_at'=>'2022-03-11 19:20:00'
        ]);
    }
}
