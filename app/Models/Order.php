<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function city() {
        return $this->belongsTo('App\Models\Cities');
    }

    public function service() {
        return $this->belongsTo('App\Models\Services');
    }

    public function paymentType() {
        return $this->belongsTo('App\Models\PaymentType');
    }

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }

    public function users() {
        return $this->hasMany('App\Models\User');
    }

    protected $fillable = ['amount', 'address', 'user_id', 'product_id', 'payment_type_id', 'city_id', 'service_id'];

    public $timestamps = false;
}
