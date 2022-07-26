<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Seller::factory()->create([
            's_name' => 'Mr. X',
            's_phone' => '01222222222',
            's_email' => 'mrx@gmail.com',
            's_password' => '133631788e68ce51eb65eac86bc93753',
            's_password_confirm' => '133631788e68ce51eb65eac86bc93753',
            's_address' => 'Bashundhara, Dhaka',
            'image' => '1647032919_pngtree-businessman-user-avatar-free-vector-png-image_1538405.jpg',
            's_approve'=>'yes',
            'created_at'=>'2022-03-11 19:00:00',
            'updated_at'=>'2022-03-11 19:00:00'
        ]);
        \App\Models\Seller::factory()->create([
            's_name' => 'Ms. Y',
            's_phone' => '01333333333',
            's_email' => 'msy@gmail.com',
            's_password' => '133631788e68ce51eb65eac86bc93753',
            's_password_confirm' => '133631788e68ce51eb65eac86bc93753',
            's_address' => 'Mirpur, Dhaka',
            'image' => '1647032929_Icon-Female-Avatar-Female-Icon-Red-Icon-Avatar-6007530.png',
            's_approve'=>'yes',
            'created_at'=>'2022-03-11 20:00:00',
            'updated_at'=>'2022-03-11 20:00:00'
        ]);
        \App\Models\Seller::factory()->create([
            's_name' => 'Ms.     Z',
            's_phone' => '01444444444',
            's_email' => 'msz@gmail.com',
            's_password' => '133631788e68ce51eb65eac86bc93753',
            's_password_confirm' => '133631788e68ce51eb65eac86bc93753',
            's_address' => 'Uttara, Dhaka',
            'image' => '1647031611_seller.png',
            's_approve'=>'no',
            'created_at'=>'2022-03-11 21:00:00',
            'updated_at'=>'2022-03-11 21:00:00'
        ]);
    }
}
