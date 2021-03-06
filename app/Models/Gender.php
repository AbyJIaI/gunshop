<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    public function users() {
        return $this->hasMany('App\Models\User');
    }

    protected $fillable = ['name'];

    public $timestamps = false;
}
