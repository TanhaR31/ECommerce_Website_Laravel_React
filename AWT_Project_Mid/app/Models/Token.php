<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    public $timestamps=false;
    use HasFactory;

    protected $fillable = [
        'Id',
        'user_id',
        'token',
        'created_at',
        'expired_at'
    ];
}
