<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'v_id','v_type','last_service_date','next_service_date','vehicle_no','cus_id'
    ];
}
