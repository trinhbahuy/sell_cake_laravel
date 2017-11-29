<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
use App\Slide;
use App\Customer;
use App\Bill;
use App\BillDetails;
use Cart;
use Hash;
use Auth;

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

      foreach (Cart::content() as $product) {
          $detail = new BillDetails;
          $detail->id_bill = $bill->id;
          $detail->id_product = $product->id;
          $detail->quantity = $product->qty;
          $detail->unit_price = $product->price;
          $detail->save();
      }
      return redirect('trangchu');
  }
  //////////// REGISTER-LOGIN-LOGOUT /////////
  public function register(){
    return view('pages.register');
  }
  public function postRegister(Request $req)
  {
      $this -> validate($req,
        [
          'email'=>'require|min:6|max:30|email',
          'full_name'=>'require|min:6|max:30',
          'address' => 'require|min:6|max:30',
          'password' => 'require|min:3|max:30',
          're_password' => 'require|same:passwrod',
          'phone'=>'require'
        ],
        [
          'email.require' =>'Vui lòng nhập email',
          'email.min'=>'Mật khẩu ít nhất 6 ký tự',
          'email.max'=>'Mật khẩu tối đa  30 ký tự',
          'full_name.require'=>'Vui lòng nhập họ tên',
          'full_name.min'=>'Họ tên ít nhât 6 ký tự',
          'full_name.max'=>'Họ tên tối đa 30 ký tự' ,
          'password.require'=>'Vui lòng nhập mật khẩu',
          'password.min'=>'Mật khẩu tối thiểu 6 kí tự',
          'password.max'=>'Mật khẩu tói đa 15 ký tự',
          're_password.require'=>'Vui lòng nhập lại mật khẩu',
          're_password.same'=>'Mật khẩu không trùng nhau'
        ]);
      $customer = new Customer();
      $customer->email = $req->email;
      $customer->name = $req->full_name;
      $customer->phone_number = $req->phone;
      $customer->address = $req->address;
      $customer->password = Hash::make($req->password);
      $customer->save();

      return redirect()->route('trangchu');
  }

  public function login(){
    return view('pages.login');
  }
  public function postLogin(Request $req){
    $this->validate($req,
      [
        'email'=> 'require|min:6|max:30|email',
        'password'=>'require|min:3|max:30'

      ],
      [
        'email.email' =>'Định dạng email không đúng',
        'email.require'=>'Vui lòng nhập email',
        'email.min'=>'Email tối thiểu 6 ký tự',
        'email.max'=>'Email tối đa 30 kí tự',
        'password.require'=>'Vui lòng nhập mật khẩu',
        'password.min'=>'Mật khẩu khong đúng',
        'password.max'=>'Mật khẩu không đúng'
      ]);
    $cre = array(['email' => $req->email , 'password' => $req->password]);
    if(Auth::guard('customer')->attempt($cre)){
      return redirect()->route('trangchu');
    }else{
      return redirect()->back()->with(['flag'=>'danger','thongbao'=>'Đăng nhập không thành công']);
    }
  }

  public function logout(){
    //// CHƯA VIẾT GÌ.
  }
}
