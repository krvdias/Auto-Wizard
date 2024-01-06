<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'login_d_id','user_name','password','cus_id','off_id'
    ];
}
