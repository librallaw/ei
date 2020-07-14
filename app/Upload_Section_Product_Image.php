<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload_Section_Product_Image extends Model
{
    protected $table = 'upload_section_product_images';

    public function category(){
        return $this->belongsTo('App\Category', 'category_id','unique_id');
    }
}
