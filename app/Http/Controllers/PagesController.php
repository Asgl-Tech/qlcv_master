<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
        //
		$pages = Pages::all();
        return view('pages', ['pages' => $pages]);
		
		
    }
	

    public function pages_index(){
        // if(!Auth::check()){
        //     //$pages = Pages::all();            
        //     return redirect('dangnhap');//view('Auth.login');
        // }
        $pages = Pages::all();
        //return redirect('pages/index')->with('thongbao','Đã thêm thành công');

        return view('pages.index', ['pages' => $pages]);
    }
    public function getEdit($id){
        $pages = Pages::find($id);
        return view('pages.edit',['pages'=>$pages]);        
    }
    public function getDestroy($id){
        Pages::find($id)->delete();
            return redirect('pages/congvanden/danhsach')->with('thongbao','Pages deleted successfully');
    }
    public function getThem(){
        // echo 'xin chào';
        return view ('pages.create');
    }
     public function postThem(Request $request)
    {
        $this->validate($request, [
            'page_name' => 'required',
            'page_title' => 'required',
			'meta_title' => 'required',
        ]);
        // Pages::create($request->all());
       
        // return redirect()->route('pages.index')
        //                 ->with('success','Pages created successfully');
        $pages = new Pages;
        $pages->page_name=$request->page_name;
        $pages->page_title = $request->page_name;
        $pages->meta_title = $request->meta_title;
        $pages->meta_keyword = $request->meta_keyword;
        $pages->meta_description = $request->meta_description;
        $pages->is_active = $request->is_active;
        $pages->page_detail = $request->page_detail;
        
        
        // 'page_name', 'page_title', 'page_detail', 'meta_title', 'meta_keyword', 'meta_description', 'is_active', 'created_at', 'updated_at'
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
        $pages = Pages::find($id);
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
