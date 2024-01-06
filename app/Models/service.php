<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $fillable = [
        's_id','s_type','s_hours','service_charge','fill_quantity','s_location','appointment_id','cus_id', 'off_id'
    ];
}
