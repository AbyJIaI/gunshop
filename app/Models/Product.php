<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function brand() {
        return $this->belongsTo('App\Models\Brand');
    }

    public function caliberType() {
        return $this->belongsTo('App\Models\CaliberType');
    }

    public function baskets() {
        return $this->hasMany('App\Models\Basket');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    protected $fillable = ['name', 'category_id', 'brand_id', 'caliber_id', 'price', 'amount', 'image'];


    public $timestamps = false;
}
