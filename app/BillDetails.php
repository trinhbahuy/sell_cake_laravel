<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    protected $table = "bill_detail";

    public function bill(){
       return $this->belongsTo('App\Bill','id_bill','id');
    }
    public function product()
    {
    	return $this->belongsTo('App\Product','id_product','id');
    }
}
