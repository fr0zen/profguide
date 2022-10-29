<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'order_num_id';

    protected $fillable = [
        'order_num_id',
        'email',
        'active_status',
        'payment_status'
    ];
}
