<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = "products";
    public function product_type() {
        return $this->belongsTo('App\Models\TypeProduct','id_type','id');
    }
    public function images_product() {
        return $this->hasMany('App\Models\ImagesProducts','id_image','id');
    }  
    public function comment_product() {
        return $this->hasMany('App\Models\CommentProduct','idproduct','id');
    }  
    public function bill_detail() {
        return $this->belongsTo('App\Models\BillDetails','id_product','id');
    }
    protected $fillable = [
        'ProName'
    ];
}
