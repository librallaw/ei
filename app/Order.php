<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderItem(){
        return $this->hasMany('App\OrderItem');
    }
}
