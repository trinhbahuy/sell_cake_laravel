<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    protected $table = "bill_detail";

    public function bill(){
        $this->belongsTo('App\Bill','id_bill','id');
    }
}
