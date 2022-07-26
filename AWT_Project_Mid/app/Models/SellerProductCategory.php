<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SellerProduct;

class SellerProductCategory extends Model
{
    use HasFactory;

    public function sellerProductCategoryHasManySellerProduct(){
        $this->hasMany(SellerProduct::class,'ct_id', 'id');
    }
}
