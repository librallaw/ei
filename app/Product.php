<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function category(){
        return $this->belongsTo('App\Category', 'category_id','unique_id');
    }

    public function orderItem(){
        return $this->hasMany('App\OrderItem');
    }

}