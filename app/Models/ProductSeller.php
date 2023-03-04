<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSeller extends Model
{
    use HasFactory;

    protected $table = "product_sellers";

    protected $fillable = [
        'name',
        'price',
        'product_condition',
        'user_id',
    ];
}
