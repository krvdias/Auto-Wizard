<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class process extends Model
{
    use HasFactory;

    protected $fillable = [
        'p_id','p_location','off_id','v_id'
    ];
}
