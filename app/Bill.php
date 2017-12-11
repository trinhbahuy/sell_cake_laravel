<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    public function customer(){
       return $this->belongsTo('App\Customer','id_customer','id');
    }

    public function details(){
      return  $this->hasMany('App\BillDetails','id_bill', 'id');
    }
    public function user()
    {
    	return $this->belongsTo('App\User','id_user','id');
    }
}
