<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBStorage extends Model
{
    public function has($key)
    {
        return OrderItem::find($key);
    }

    public function get($key)
    {
        if($this->has($key))
        {
            return new CartCollection(OrderItem::find($key)->cart_data);
        }
        else
        {
            return [];
        }
    }

    public function put($key, $value)
    {
        if($row = OrderItem::find($key))
        {
            // update
            $row->order_id = $value;
            $row->product_id = $value;
            $row->price = $value;
            $row->save();
        }
        else
        {
            OrderItem::create([
                'id' => $key,
                'order_id' => $value,
                'product_id' => $value,
                'price' => $value
            ]);
        }
    }
}
