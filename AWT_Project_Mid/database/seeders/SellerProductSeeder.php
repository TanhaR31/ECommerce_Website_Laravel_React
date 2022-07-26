<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SellerProduct;


class SellerProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SellerProduct::factory()->create([
            's_id' => 1,
            'p_name' => 'Men Shirt',
            'ct_id' => 1,
            'p_category' => 'Fashion',
            'p_description' => 'Blue classic long sleeve',
            'p_image' => '1647210028_Ncartoon-long-sleeve-blue-classic-men-shirt-vector-29565239.jpg',
            'p_qty' => 100,
            'p_sold' => 42,
            'fix_cost' => 650,
            'var_cost' => 95,
            'st_id' => 1,
            'adm_cost' => 20,
            'extra_price' => 55,
            'discount' => 20,
            'total_price' => 800,
            'p_approve' => 1,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerProduct::factory()->create([
            's_id' => 1,
            'p_name' => 'Men Formal Coat',
            'ct_id' => 1,
            'p_category' => 'Fashion',
            'p_description' => 'Men Formal Black Coat',
            'p_image' => '1647111147_istockphoto-1362812225-612x612.jpg',
            'p_qty' => 75,
            'p_sold' => 23,
            'fix_cost' => 1000,
            'var_cost' => 300,
            'st_id' => 1,
            'adm_cost' => 20,
            'extra_price' => 100,
            'discount' => 0,
            'total_price' => 1420,
            'p_approve' => 0,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerProduct::factory()->create([
            's_id' => 1,
            'p_name' => 'LED 32 TV',
            'ct_id' => 2,
            'p_category' => 'Electronics',
            'p_description' => 'Screen size: 81.3 cm Aspect ratio: 16:9, 4:3 Resolution: 1366 x 768 Viewing angle: H 1780 / V 1780',
            'p_image' => '1647111789_16323071751.jpg',
            'p_qty' => 50,
            'p_sold' => 11,
            'fix_cost' => 20000,
            'var_cost' => 500,
            'st_id' => 1,
            'adm_cost' => 20,
            'extra_price' => 1500,
            'discount' => 2000,
            'total_price' => 20020,
            'p_approve' => 1,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerProduct::factory()->create([
            's_id' => 2,
            'p_name' => 'Women Dress',
            'ct_id' => 1,
            'p_category' => 'Fashion',
            'p_description' => 'Women Black Dress In Different Design',
            'p_image' => '1647209807_download.jpg',
            'p_qty' => 100,
            'p_sold' => 69,
            'fix_cost' => 1000,
            'var_cost' => 200,
            'st_id' => 2,
            'adm_cost' => 10,
            'extra_price' => 300,
            'discount' => 0,
            'total_price' => 1510,
            'p_approve' => 1,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerProduct::factory()->create([
            's_id' => 2,
            'p_name' => 'Air Purifier',
            'ct_id' => 4,
            'p_category' => 'Appliance',
            'p_description' => '- Air purifier + Ionizer + UV lamp (3 in 1) - 7 Stage purifications - PM 2.5 Indicator display',
            'p_image' => '1647122004_Screenshot 2022-03-13 035212.png',
            'p_qty' => 50,
            'p_sold' => 8,
            'fix_cost' => 20000,
            'var_cost' => 500,
            'st_id' => 2,
            'adm_cost' => 10,
            'extra_price' => 100,
            'discount' => 200,
            'total_price' => 20410,
            'p_approve' => 1,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerProduct::factory()->create([
            's_id' => 2,
            'p_name' => 'Cat Toy',
            'ct_id' => 6,
            'p_category' => 'Toys',
            'p_description' => 'Toys Type: Feather Toys Material: Plastic Mouse Color: Random Teaser Toy:  cat interactive toy',
            'p_image' => '1647122169_rrrrrrrr.png',
            'p_qty' => 70,
            'p_sold' => 34,
            'fix_cost' => 100,
            'var_cost' => 10,
            'st_id' => 2,
            'adm_cost' => 10,
            'extra_price' => 10,
            'discount' => 0,
            'total_price' => 130,
            'p_approve' => 1,
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
    }
}
