<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
use App\Slide;
use App\Customer;
use App\Bill;
use Cart;

class PageController extends Controller
{
  public function __construct(){
      $loaisanpham = ProductType::all();
      view()->share('loaisanpham',$loaisanpham);
  }
  public function trangchu(){
    $slide = Slide::all();
    $sanpham = Product::paginate(8);
    $noibat = Product::where('top',1)->paginate(4);
    return view('pages.trangchu',['slide'=>$slide, 'sanpham'=>$sanpham,'noibat'=>$noibat]);
  }
  public function sanpham($id){
      $type_sp = ProductType::find($id);
      $sanpham = Product::where('id_type', $id)->get();
      $tenbanh = Product::all();
      return view('pages.sanpham',['type_sp'=>$type_sp,'sanpham'=>$sanpham,'tenbanh'=>$tenbanh]);

  }

  public function about(){
      return view('pages.about');
  }

  public function contact(){
      return view('pages.contact');
  }

  public function details($id){
      $product = Product::find($id);
      return view('pages.product',['product'=>$product]);
  }

  public function product($id){
      $product = Product::find($id);
      Cart::add(['id'=>$id, 'name'=>$product->name, 'qty'=>1, 'price'=>$product->unit_price,'options'=>['image'=>$product->image]]);
      return redirect('cart');
  }

  public function cart(){
      $content = Cart::content();
      $total = Cart::subtotal(false);
      return view('pages.cart',['content'=>$content, 'total'=>$total]);
  }

  public function remove($rowId){
      Cart::remove($rowId);
      return redirect('cart');
  }

  public function checkView(){
      return view('pages.checkout');
  }

  public function checkOut(Request $request){
      $customer = new Customer;
      $customer->name = $request->name;
      $customer->address = $request->address;
      $customer->email = $request->email;
      $customer->phone_number = $request->phone;
      $customer->save();

      $bill = new Bill;
      $bill->id_customer = $customer->id;
      $bill->date_order = Date('Y-m-d') ;
      $bill->total = Cart::subtotal(false);
      $bill->payment = $request->payment_method;
      $bill->save();
      return redirect('trangchu');
  }
}
