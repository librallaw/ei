<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function upload_section_product_image(){
        return $this->hasMany('App\Upload_Section_Product_Image');
    }

    public function product(){
        return $this->hasMany('App\Product');
    }
}
