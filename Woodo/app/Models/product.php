<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'pr_name','pr_categories','pr_price','pr_author_id','pr_sppier_id','pr_sale','pr_number','pr_date','pr_description','pr_keyword','pr_new',
        'pr_hot'
        
    ];
}
