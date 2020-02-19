<?php

namespace Modules\Products\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products__products';
    protected $fillable = [
    	'name',
    	'price',
    	'description',
    	'picture'
    ];
}
