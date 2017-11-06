<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    public function customer(){
        $this->belongsTo('App\Customer','id_customer','id');
    }

    public function details(){
        $this->hasMany('App\BillDetails','id_bill', 'id');
    }
}
