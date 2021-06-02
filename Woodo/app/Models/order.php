<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'or_transaction_id','or_product_id','or_user_id','or_price','or_price_end','or_sale','or_date'
        
    ];
}
