<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Bill;
use App\Product;
use Auth;

class AdminController extends Controller
{
    public function khachhang(){
    	$khachhang = Customer::all();
    	return view('admin.customer',compact('khachhang'));
    }

    public function donhang(){
    	$donhang = Bill::all();
    	$khachhang = Customer::all();
    	return view('admin.bill',compact('donhang','khachhang'));
    }
    public function sanpham(){
    	$sanpham = Product::paginate(10);

    	return view('admin.product',compact('sanpham'));
    }
    public function getAddProduct(){
    	$sanpham = Product::all();
    	return view('admin.add_product',compact('sanpham'));
    }
    // public function postAddProduct(){

    // }

    public function getEditProduct(){
    	$sanpham = Product::all();
    	return view('admin.edit_product',compact('sanpham'));
    }
    public function postEditProduct(Request $req){
        return view('admin.edit_product');
    }
    ##########################  LOGIN - ADMIM ##############################################

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
