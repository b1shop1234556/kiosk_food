<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $primaryKey = 'customer_id';

    protected $fillable = [
        'customer_id',
        'name',
        'email',
        'password', 
    ];
    //
}
