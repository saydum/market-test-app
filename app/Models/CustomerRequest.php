<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerRequest extends Model
{
    use HasFactory;

    protected $table = "customer_requests";

    protected $fillable = [
        'name',
        'price_from',
        'price_up_to',
        'product_condition',
        'user_id',
    ];
}
