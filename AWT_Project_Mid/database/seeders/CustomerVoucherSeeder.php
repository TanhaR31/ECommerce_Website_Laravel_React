<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CustomerVoucher;

class CustomerVoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CustomerVoucher::factory()->create([
            'c_id' =>3,
            'sv_id'=>1,
            'sv_code'=>'ERR101',
            'starts'=>'2022-03-14',
            'expires'=>'2022-03-28',
            'sv_status'=>'not used',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\CustomerVoucher::factory()->create([
            'c_id' =>4,
            'sv_id'=>2,
            'sv_code'=>'ERR102',
            'starts'=>'2022-03-13',
            'expires'=>'2022-03-20',
            'sv_status'=>'not used',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
    }
}
