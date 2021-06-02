<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable = [
        
        'ar_name','ar_description','ar_content','ar_category_id','ar_author','ar_title'
    ];

}
