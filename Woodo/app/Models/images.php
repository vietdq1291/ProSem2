<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $fillable = [
        'im_product_id','im_name','im_images'
        
    ];
}
