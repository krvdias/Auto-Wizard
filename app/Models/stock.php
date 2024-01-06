<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'st_id','st_name','st_quantity','brand','fill_quantity','sup_id','off_id'
    ];
}
