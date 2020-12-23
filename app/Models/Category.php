<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products() {
        return $this->hasMany('App\Models\Product');
    }

    public function sub_categories() {
        return $this->hasMany('App\Models\Category', 'category_id');
    }

    public function parent_category(){
        return $this->belongsTo(self::class, 'category_id');
    }

    protected $fillable = ['name', 'category_id'];

    public $timestamps = false;
}
