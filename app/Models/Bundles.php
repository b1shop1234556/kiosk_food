<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bundles extends Model
{
    use HasFactory;

    protected $table = 'bundles';
    
    protected $primaryKey = 'bundle_id';

    protected $fillable = [
        'menu_item_id',
        'bundle_meal_name',
        'description',
        'price',
        'menu_image', 
    ];
    //
}
