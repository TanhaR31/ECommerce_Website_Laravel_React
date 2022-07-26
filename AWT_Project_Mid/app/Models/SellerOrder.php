<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;
use App\Models\SellerOrderDetail;
use App\Models\SellerCustomer;

class SellerOrder extends Model
{
    use HasFactory;

    public function sellerOrderBelongsToSeller(){
        return $this->belongsTo(Seller::class,'s_id','id');
    }

    public function sellerOrderHasManySellerOrderDetails(){
        return $this->hasMany(SellerOrderDetail::class,'o_id','id');
    }

    public function sellerOrderBelongsToSellerCustomer(){
        return $this->belongsTo(SellerCustomer::class,'c_id','id');
    }
}
