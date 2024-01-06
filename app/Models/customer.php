<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'cus_id','first_name','last_name','address','cus_mobile','cus_email','cus_dob'
    ];
}
