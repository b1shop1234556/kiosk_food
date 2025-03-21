<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Custvouchers extends Model
{
    use HasFactory;

    protected $table = 'customer_vouchers';
    
    protected $primaryKey = 'customer_voucher_id  ';

    protected $fillable = [
        'customer_id',
        'voucher_id',
        'used',
        'used_on',
        'valid_from',
    ];
    //
}
