<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;
use App\Models\SellerProductCategory;
use App\Models\SellerOrderDetail;

class SellerProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        's_id',
        'p_name',
        'ct_id',
        'p_category',
        'p_description',
        'p_image',
        'p_qty',
        'p_sold',
        'fix_cost',
        'var_cost',
        'st_id',
        'adm_cost',
        'extra_cost',
        'discount',
        'total_price',
        'p_approve',
        'created_at',
        'updated_at'
    ];

    public function sellerProductBelongsToSeller(){
        return $this->belongsTo(Seller::class,'s_id','id');
    }

    public function sellerProductHasOneSellerProductCategory(){
        return $this->hasOne(SellerProductCategory::class,'id','ct_id');
    }

    public function sellerProductHasManyOrderDetail(){
        $this->hasMany(SellerOrderDetail::class,'o_id', 'id');
    }
}
