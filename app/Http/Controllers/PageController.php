<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;

class PageController extends Controller
{
  public function trangchu(){
    $sanpham = Product::paginate(4);
    return view('pages.trangchu',['sanpham'=>$sanpham]);
  }
}
