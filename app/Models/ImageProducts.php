<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageProducts extends Model
{
    //
    protected $table = "image_product";
    public function product() {
        return $this->belongsTo('App\Models\Products','id_image','id');
    }
}
