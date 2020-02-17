<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    //
    protected $table = "type_product";
    public function product() {
        return $this->hasMany('App\Models\Products','id_type','id');
    }
    public function category() {
        return $this->belongsTo('App\Models\Category','id_category','id');
    }
}
