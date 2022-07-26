<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SellerType;
use App\Models\SellerProduct;
use App\Models\SellerOrder;
use App\Models\SellerVoucher;

class Seller extends Model
{
    protected $fillable = [
        's_name', 's_phone', 's_email', 's_address', 's_password', 's_password_confirm', 's_approve'
    ];

    use HasFactory;

    public function sellerHasOneSellerType(){
        return $this->hasOne(SellerType::class,'s_id','id');
    }

    public function sellerHasManySellerProduct(){
        return $this->hasMany(SellerProduct::class,'s_id','id');
    }

    public function sellerHasManySellerOrder(){
        return $this->hasMany(SellerOrder::class,'s_id','id');
    }

    public function sellerHasManySellerVoucher(){
        return $this->hasMany(SellerVoucher::class,'s_id','id');
    }


}
