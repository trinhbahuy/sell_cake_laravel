<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\ProductType;
use App\Slide;
use App\Customer;
use App\Bill;
use App\BillDetails;
use App\User;
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
  public function search(Request $req)
  {
    $search = Product::where('name','like','%'.$req->search.'%')
                        ->orwhere('unit_price','like','%'.$req->search.'%')
                        // ->join('ProductType','ProductType.id','=','Product.id_type')
                        // ->orwhere('ProductType.name','like','%'.$req->search.'%')
                        ->paginate(6);
    $count  = Product::where('name','like','%'.$req->search.'%')
                        ->orwhere('unit_price','like','%'.$req->search.'%')
                        // ->join('ProductType','ProductType.id','=','Product.id_type')
                        // ->orwhere('ProductType.name','like','%'.$req->search.'%')
                        ->get();
    return view('pages.search',compact('search','count'));
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
      $same_type = Product::where('id_type', $product->id_type)->get()->shuffle()->take(3);
      $noibat = Product::where('top',1)->take(6)->get();
      //dd($same_type);
      return view('pages.details',['product' => $product, 'same_type' => $same_type, 'noibat' => $noibat]);
  }

  public function product($id){
      $product = Product::find($id);
      Cart::add(['id'=>$id, 'name'=>$product->name, 'qty'=>1, 'price'=>$product->unit_price,'options'=>['image'=>$product->image, 'type'=>$product->id_type]]);
       return redirect('cart');
  }

  public function cart(){
      $content = Cart::content()->groupBy('options->type');
      $total = (float)Cart::subtotal(false)*1000;
      //var_dump($total);
      // foreach ($content as $item) {
      //   echo print_r($item). "<br>";
      //   foreach ($item as $items) {
      //     echo $items->name. "<br>" .$items->options->image. "<br>";
      //   }
      // }
      //dd($content);
      return view('pages.cart',['content'=>$content, 'total'=>$total]);
  }

  public function updatePlus($rowId, $qty){
      $quantity = $qty+1;
      Cart::update($rowId, $quantity);
      return redirect('cart');
  }

  public function updateMinus($rowId, $qty){
     $quantity = $qty-1;
      Cart::update($rowId, $quantity);
      return redirect('cart');
  }

  public function remove($rowId){
      Cart::remove($rowId);
      return redirect('cart');
  }

  public function checkView(){
      return view('pages.checkout');
  }

  public function checkOut(Request $request){
    if(Auth::check()){
        $customer = new Customer;
        $customer->id_user = Auth::user()->id;
        $customer->name = Auth::user()->name;
        $customer->address = Auth::user()->address;
        $customer->email = Auth::user()->email;
        $customer->phone_number = Auth::user()->phone_number;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = Date('Y-m-d') ;
        $bill->total = (float)Cart::subtotal(false)*1000*9/10;
        $bill->payment = "home";
        $bill->save();
    }else{
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = Date('Y-m-d') ;
        $bill->total = (float)Cart::subtotal(false)*1000;
        $bill->payment = $request->payment_method;
        $bill->save();
    }
      foreach (Cart::content() as $product) {
          $detail = new BillDetails;
          $detail->id_bill = $bill->id;
          $detail->id_product = $product->id;
          $detail->quantity = $product->qty;
          $detail->unit_price = $product->price;
          $detail->save();
      }
      Cart::destroy();
      return redirect('trangchu');
  }
  //////////// REGISTER-LOGIN-LOGOUT /////////
  public function register(){
    return view('pages.register');
  }
  public function postRegister(Request $req)
  {
      $this->validate($req,
        [
          'email'=>'required|min:6|max:30|email',
          'address'=>'required',
          'phone_number'=>'required|numeric',
          'name'=>'required|min:6|max:30',
          'password' => 'required|min:6|max:30',
          're_password' => 'required|same:password',
        ],
        [
          'email.required' =>'Vui lòng nhập email',
          'email.min'=>'Mật khẩu ít nhất 6 ký tự',
          'email.max'=>'Mật khẩu tối đa  30 ký tự',
          'address.required'=>'Vui lòng nhập địa chỉ',
          'phone_number.required'=>'Vui lòng nhập số điện thoại',
          'phone_number.numeric'=> 'Số điện thoại chỉ bao gồm các số từ 0 đến 9',
          'name.required'=>'Vui lòng nhập họ tên',
          'name.min'=>'Họ tên ít nhât 6 ký tự',
          'name.max'=>'Họ tên tối đa 30 ký tự' ,
          'password.required'=>'Vui lòng nhập mật khẩu',
          'password.min'=>'Mật khẩu tối thiểu 6 kí tự',
          'password.max'=>'Mật khẩu tói đa 15 ký tự',
          're_password.required'=>'Vui lòng nhập lại mật khẩu',
          're_password.same'=>'Mật khẩu không trùng nhau'
        ]);
      $user = new User;
      $user->email = $req->email;
      $user->address = $req->address;
      $user->phone_number = $req->phone_number;
      $user->name = $req->name;
      $user->role = 0;
      $user->password = bcrypt($req->password);
      $user->save();

      return redirect()->route('login');
  }

  public function login(){
    return view('pages.login');
  }
  public function postLogin(Request $req){
    $this->validate($req,
      [
        'email'=> 'required|min:6|max:30|email',
        'password'=>'required|min:3|max:30'

      ],
      [
        'email.email' =>'Định dạng email không đúng',
        'email.required'=>'Vui lòng nhập email',
        'email.min'=>'Email tối thiểu 6 ký tự',
        'email.max'=>'Email tối đa 30 kí tự',
        'password.required'=>'Vui lòng nhập mật khẩu',
        'password.min'=>'Mật khẩu khong đúng',
        'password.max'=>'Mật khẩu không đúng'
      ]);
    
    if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
      return redirect()->route('trangchu');
    }else{
      return redirect()->back()->with(['flag'=>'danger','thongbao'=>'Đăng nhập không thành công']);
    }
  }

  public function logout(){
    Auth::logout();
    return  redirect('trangchu');
  }
}
