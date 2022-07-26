<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SellerCustomer;

class SellerCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SellerCustomer::factory()->create([
            'c_name' => 'Mr. A',
            'c_phone'=>'01777777777',
            'c_email'=>'mra@gmail.com',
            'c_address'=>'Banani, Dhaka',
            'c_image'=>'',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerCustomer::factory()->create([
            'c_name' => 'Mr. B',
            'c_phone'=>'01888888888',
            'c_email'=>'mrb@gmail.com',
            'c_address'=>'Kuril, Dhaka',
            'c_image'=>'',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerCustomer::factory()->create([
            'c_name' => 'Mr. C',
            'c_phone'=>'01999999999',
            'c_email'=>'mrc@gmail.com',
            'c_address'=>'Kuratoli, Dhaka',
            'c_image'=>'',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerCustomer::factory()->create([
            'c_name' => 'Mr. D',
            'c_phone'=>'01777888999',
            'c_email'=>'mrd@gmail.com',
            'c_address'=>'Mirpur, Dhaka',
            'c_image'=>'',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
    }
}
