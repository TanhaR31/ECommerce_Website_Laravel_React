<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SellerOrder;
use App\Models\CustomerVoucher;


class SellerCustomer extends Model
{
    use HasFactory;

    public function sellerCustomerHasManySellerOrder(){
        return $this->hasMany(SellerOrder::class,'c_id','id');
    }

    public function sellerCustomerHasManyCustomerVoucher(){
        return $this->hasMany(CustomerVoucher::class,'c_id','id');
    }
}
