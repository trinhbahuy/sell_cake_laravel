<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products" ;

    public function productType(){
      return  $this->belongTo('App\ProductType','id_type','id');
}
}
