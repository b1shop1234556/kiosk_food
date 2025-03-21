<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transactions extends Model
{
    use HasFactory;             

    protected $table = 'transactions';

    protected $primaryKey = 'trans_id';

    protected $fillable = [
        'order',
        'payment_method ',
        'payment_status ',
    ];
    //
}
