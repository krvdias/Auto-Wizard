<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    protected $fillable = [
        'i_id','i_name','unit_price','st_id','v_id','i_item_id'
    ];
}
