<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion_details extends Model
{
    protected $fillable = [
        'pd_name','pd_promotion_id','pd_product_id','pd_date_start','pd_date_end','pd_number','pd_apply'
        
    ];

}
