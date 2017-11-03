<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    public function customer(){
        $this->belongsTo('App\Customer','id_customer','id');
    }
}
