<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'address', 'user_id', 'product_id', 'payment_type_id', 'city_id', 'service_id'];

    public $timestamps = false;
}
