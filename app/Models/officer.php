<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class officer extends Model
{
    use HasFactory;

    protected $fillable = [
        'off_id','off_type','first_name','last_name','off_address','off_mobile','off_email','off_dob'
    ];
}
