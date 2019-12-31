<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pages;
use App\tbl_congvanden;
use App\Loaicongvan;
use App\Noiphathanh;
use App\Theloaicongvan;
use App\Linhvuc;
use App\DokhanModel;
use App\DomatModel;
use App\PhongbanModel;
use App\NoiluuModel;
use Illuminate\Support\Facades\Auth;
class CongvandenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
		$pages = tbl_congvanden::all();
        return view('congvanden', ['Pages' => $pages]);				
    }
	
    public function pages_index(){
        $pages = tbl_congvanden::all();
        return view('congvanden.index', ['Pages' => $pages]);
    }
    public function getEdit($id){
        $pages = tbl_congvanden::find($id);
        return view('congvanden.edit',['Pages'=>$pages]);        
    }
    public function getDestroy($id){
        tbl_congvanden::find($id)->delete();
            return redirect('pages/congvanden/danhsach')->with('thongbao','Pages deleted successfully');
    }
    public function getThem(){
        // echo 'xin chào';
        $loaicongvan = Loaicongvan::all();
        $noiphathanh = Noiphathanh::all();
        $theloaicongvan = Theloaicongvan::all();
        $linhvuc = Linhvuc::all();
        $domat = DomatModel::all();
        $dokhan = DokhanModel::all();
        $phongban = PhongbanModel::all();
        $noiluucv = NoiluuModel::all();

        return view ('congvanden.create',['Loaicongvan' => $loaicongvan,'Noiphathanh' => $noiphathanh,'Theloaicongvan' => $theloaicongvan,'Theloaicongvan' => $theloaicongvan,'linhvuc' => $linhvuc,'domat' => $domat,'dokhan' => $dokhan,'phongban' => $phongban,'noiluu' => $noiluucv]);
    }
     public function postThem(Request $request)
    {
        // $this->validate($request, [
        //     'page_name' => 'required',
        //     'page_title' => 'required',
		// 	'meta_title' => 'required',
        // ]);
       
        $pages = new tbl_congvanden;
        $pages->page_name=$request->page_name;
        $pages->page_title = $request->page_name;
        $pages->meta_title = $request->meta_title;
        $pages->meta_keyword = $request->meta_keyword;
        $pages->meta_description = $request->meta_description;
        $pages->is_active = $request->is_active;
        $pages->page_detail = $request->page_detail;
        
        $pages->save();
        return redirect('pages/congvanden/danhsach')->with('thongbao','Added successfully');
    }
    
    public function postEdit(Request $request, $id)
    {
       $this->validate($request, [
            'page_name' => 'required',
            'page_title' => 'required',
			'meta_title' => 'required',
        ]);
        // Pages::find($id)->update($request->all());
        $pages = tbl_congvanden::find($id);
        $pages->page_name=$request->page_name;
        $pages->page_title = $request->page_name;
        $pages->meta_title = $request->meta_title;
        $pages->meta_keyword = $request->meta_keyword;
        $pages->meta_description = $request->meta_description;
        $pages->is_active = $request->is_active;
        $pages->page_detail = $request->page_detail;

        $pages->save();
        return redirect('pages/congvanden/danhsach')->with('thongbao','Edit successfully');
    }
   
}
