<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Bill;
use App\BillDetails;
use App\Product;
use App\ProductType;
use App\User;
use Auth;

class AdminController extends Controller
{   
    /// Hien thi thong tin
    public function khachhang(){
        $khachhang = Customer::all();
        return view('admin.customer',compact('khachhang'));
    }
    public function admin($id){
        $admin = User::find($id);
        return view('admin.admin',compact('admin'));
    }
    public function listAdmin(){
        $admin = User::all();
        return view('admin.list_admin',compact('admin'));
    }
    public function donhang(){
        $donhang = Bill::all();
        $khachhang = Customer::all();
        return view('admin.bill',compact('donhang','khachhang'));
    }
    public function bill_detail($id){
        $bill_detail = BillDetails::where('id_bill',$id)->get();
         return view('admin.bill_detail',compact('bill_detail'));
    }
    public function sanpham(){
        $sanpham = Product::paginate(10);
        return view('admin.product',compact('sanpham'));
    }
    /// Thêm sản phẩm
    public function getAddProduct(){
        $type_product = ProductType::all();
        return view('admin.add_product',['type_product'=>$type_product]);
    }
    public function postAddProduct(Request $request){
        $this->validate($request,
            [
                'name'=>'required',
                'id'=>'required',
                'image'=>'required',
                'unit'=>'required',
                'description'=>'required',
                'unit_price'=>'required'
            ],
            [
                'name.required'=>'Vui lòng nhập tên bánh',
                'image.required'=>'Vui lòng chọn file ảnh ',
                'unit.required'=>'Vui lòng nhập trạng thái đóng gói ',
                'description.required'=>'Vui lòng nhập mô tả sản phẩm ',
                'unit_price.required'=>'Vui lòng nhập giá sản phẩm'
            ]);
       $product = new Product();
       $file = $request->file('image'); 
       $file->move('public/image/product',$file->getClientOriginalName());
       $product->name = $request->name;
       $product->id_type = $request->id;
       $product->description = $request->description;
       $product->unit_price = $request->unit_price;
       $product->unit = $request->unit;
       $product->image = $file->getClientOriginalName();
       $product->save();
       return redirect()->back()->with('message','Thêm sản phẩm thành công');
    }
    /// Sửa thông tin sản phẩm
    public function getEditProduct(){
        $sanpham = Product::all();
        return view('admin.edit_product',compact('sanpham'));
    }
    public function postEditProduct(Request $req){
        return view('admin.edit_product');
    }
    ##########################  LOGIN / LOGOUT - ADMIM ##############################################

    public function getLogin(){
        return view('admin.login');
    }
    public function postLogin(Request $req)
    {
        $this->validate($req,
            [
             'email' => 'required|email', 
             'password' => 'required|min:3|max:15'
                
            ],
            [
                'email.required' => 'Vui lòng nhập email !',
                'email.email' => 'Email không đúng định dạng !',
                'password.required' => 'Vui lòng nhập mật khẩu !',
                'password.min' => 'Mật khẩu ít nhất 3 ký tự !',
                'password.max' => 'Mạt khẩu nhiều nhất 15 ký tự !',
            ]
        );
        $cre = array('email' => $req -> email ,'password' => $req -> password);
        if(Auth::attempt($cre)){
            return redirect()->route('sanpham');

        }else{
            return redirect()->back()->with(['flag' =>'danger','thongbao'=>'Đăng nhập không thành công!']);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin-login');
    }
    
}
