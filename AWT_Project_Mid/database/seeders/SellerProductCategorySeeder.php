<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SellerProductCategory;

class SellerProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SellerProductCategory::factory()->create([
            'p_category' => 'Fashion',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerProductCategory::factory()->create([
            'p_category' => 'Electronics',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\SellerProductCategory::factory()->create([
            'p_category' => 'Home',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);	
        \App\Models\SellerProductCategory::factory()->create([
            'p_category' => 'Appliance',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);	
        \App\Models\SellerProductCategory::factory()->create([
            'p_category' => 'Makeup',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);	
        \App\Models\SellerProductCategory::factory()->create([
            'p_category' => 'Toys',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);	
    }
}
