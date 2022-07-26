<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SellerVoucher;

class SellerVoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SellerVoucher::factory()->create([
            's_id'=>1,
            'sv_req_amount'=>0,
            'sv_price'=>100,
            'sv_code'=>'ERR101',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerVoucher::factory()->create([
            's_id'=>1,
            'sv_req_amount'=>0,
            'sv_price'=>50,
            'sv_code'=>'ERR102',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
    }
}
