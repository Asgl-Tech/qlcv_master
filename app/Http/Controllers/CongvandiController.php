<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Pages;
use Illuminate\Support\Facades\Auth;
class CongvandiController extends Controller
{
    public function getDangNhap(){
        if(Auth::check()){
            $pages = Pages::all();
            return view('pages/index', ['pages' => $pages]);
        }
        return view('Auth.login');
    }

}
