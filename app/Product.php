<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products" ;

    public function productType(){
        $this->belongTo('App\ProductType','id_type','id');
}
}
