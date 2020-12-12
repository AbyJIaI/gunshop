<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function brand() {
        return $this->belongsTo('App\Brand');
    }

    public function caliberType() {
        return $this->belongsTo('App\CaliberType');
    }

    public function baskets() {
        return $this->hasMany('App\Basket');
    }

    protected $fillable = ['name', 'category_id', 'brand_id', 'caliber_id', 'price', 'amount'];

    public $timestamps = false;
}
