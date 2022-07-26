<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SellerCustomer;


class CustomerVoucher extends Model
{
    use HasFactory;

    public function customerVoucherBelongsToSellerCustomer(){
        return $this->belongsTo(SellerCustomer::class,'c_id','id');
    }
}
