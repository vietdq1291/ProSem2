<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = [
        'ct_name','ct_total_product','ct_author_id'
        
    ];
}
