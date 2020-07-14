<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{

    protected $table = 'order_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'product_id', 'price',
    ];

    public function order(){
        return $this->belongsTo('App\Order', 'order_id','unique_id');
    }

    public function product(){
        return $this->belongsTo('App\Product', 'product_id','unique_id');
    }

}
