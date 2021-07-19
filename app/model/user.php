<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = [
        'phone',
        'password',
    ];
    public $primaryKey = "uid";
    public $timestamps = false;
}
