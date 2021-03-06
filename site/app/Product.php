<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';

    public $fillable = [
        'name',
        'price',
        //grams
        'weight',
        'size',
    ];
}
