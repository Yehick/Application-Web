<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumabl extends Model
{
    protected $fillable = [
        'name',
        'price',
        'quantity'

    ];
}
