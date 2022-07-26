<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;
use App\Models\SellerType;
use App\Models\SellerProduct;
use App\Models\SellerProductCategory;
use App\Models\SellerProfitCheck;
use App\Models\SellerCredit;
use App\Models\SellerVoucher;
use App\Models\SellerCustomer;
use App\Models\CustomerReview;
use App\Models\CustomerVoucher;
use App\Models\SellerAdminMsg;
use App\Models\SellerOrder;
use App\Models\SellerOrderDetail;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            SellerSeeder::class,
            SellerTypeSeeder::class,
            SellerProductCategorySeeder::class,
            SellerProductSeeder::class,
            SellerAdminMsgSeeder::class,
            CustomerVoucherSeeder::class,
            SellerCustomerSeeder::class,
            SellerOrderSeeder::class,
            SellerOrderDetailSeeder::class,
            SellerVoucherSeeder::class,
        ]);
    }
}
