<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaliberType extends Model
{
    protected $table = "caliber_types";

    use HasFactory;

    public function products() {
        return $this->hasMany('App\Models\Product');
    }

    protected $fillable = ['name'];

    public $timestamps = false;
}
