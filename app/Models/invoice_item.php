<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'i_item_id','i_quantity','unit_price','total_amount'
    ];
}
