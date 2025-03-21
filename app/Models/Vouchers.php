<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vouchers extends Model
{
    use HasFactory;

    protected $table = 'vouchers';

    protected $primaryKey = 'voucher_id';

    protected $fillable = [
        'voucher_code',
        'description',
        'discount_type',
        'discount_value',
        'valid_from',
        'valid_until',
        'active ',
    ];
    //
}
