<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SellerOrder;
use App\Models\SellerProduct;

class SellerOrderDetail extends Model
{
    use HasFactory;

    public function sellerOrderDetailBelongsToSellerOrder(){
        return $this->belongsTo(SellerOrder::class,'o_id','id');
    }

    public function sellerOrderDetailBelongsToSellerProduct(){
        return $this->belongsTo(SellerProduct::class,'p_id','id');
    }
}
