<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orderitems extends Model
{
    use HasFactory;

    protected $table = 'order_items';
    
    protected $primaryKey = 'order_item_id';

    protected $fillable = [
        'order_id',
        'menu_item_id',
        'quantity ', 
        'subtotal ',
    ];
    //
}
