<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    protected $fillable = [
        't_user_id','t_total','t_note','t_phone','t_address'
        
    ];
}
