<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{
    use HasFactory;

    public function users() {
        return $this->hasMany('App\User');
    }

    protected $fillable = ['name'];

    public $timestamps = false;
}
