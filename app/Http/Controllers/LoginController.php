<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Pages;
class LoginController extends Controller
{
    public function getDangNhap(){
        if(Auth::check()){
            $pages = Pages::all();            
            return view('pages.congvanden.danhsach', ['pages' => $pages]);
            // return view('page.danhsach', ['pages' => $pages]);
        }
        return view('Auth.login');
    }
    public function postDangNhap(Request $request){
        // if(Auth::check()){
        //     $pages = Pages::all();            
        //     // return view('pages/index', ['pages' => $pages]);
        //     return view('page.danhsach', ['pages' => $pages]);
        // }
    	$email= $request['email'];
    	$password= $request['password'];
    	//đoạn này login theo ID cố định
    	// $user = User::find(3);
    	// Auth::login($user);
    	// return view('thanhcong',['user'=>Auth::user()]);


    	//đoạn này login theo form người dùng
    	if(Auth::attempt(['email'=>$email,'password'=>$password])){
           // return view('pages.index',['user'=>Auth::user()]);
            $pages = Pages::all();
            //return redirect('pages/index')->with('thongbao','Đã thêm thành công');
            // return view('pages/index', ['pages' => $pages]);
            //return view('pages.index', ['pages' => $pages]);
            return redirect('pages/congvanden/danhsach');
            // return view('pages.congvanden.danhsach', ['pages' => $pages]);
    	}
    	else
    	{
            return view('Auth.login',['error'=>'Đăng nhập thất bại']);
    	}
    }
    public function dangxuat(){
    	Auth::logout();
    	return view('Auth.login');
    }
}
