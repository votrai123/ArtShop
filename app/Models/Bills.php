<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    //
    protected $table = "bills";
    public function bill_detail() {
        return $this->hasMany('App\Models\BillDetails','id_bill','id');
    }
    public function users() {
        return $this->belongsTo('App\User','id_users','id');
    }
}
