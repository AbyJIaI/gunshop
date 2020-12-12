<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    use HasFactory;

    public function orders() {
        return $this->hasMany('App\Order');
    }

    protected $fillable = ['name'];

    public $timestamps = false;
}
