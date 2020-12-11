<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cities extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public $timestamps = false;
}
