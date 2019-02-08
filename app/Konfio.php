<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfio extends Model
{
    protected $table = 'konfios';
    protected $fillable = [
        'saludo'
    ];
}
