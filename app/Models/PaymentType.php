<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    use HasFactory;

    protected $table = "payment_types";

    public function orders() {
        return $this->hasMany('App\Models\Order');
    }

    protected $fillable = ['name'];

    public $timestamps = false;
}
