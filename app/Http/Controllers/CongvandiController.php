<?php

namespace App\Http\Controllers;

use App\CoQuanModel;
use App\Http\Controllers\Controller;
use App\NguoiKyModel;
use Illuminate\Http\Request;
use App\Loaicongvan;
use App\Noiphathanh;
use App\Theloaicongvan;
use App\Linhvuc;
use App\DokhanModel;
use App\DomatModel;
use App\PhongbanModel;
use App\NoiluuModel;
use Illuminate\Support\Facades\Auth;
class CongvandiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

//    public function index()
//    {
//        $pages = tbl_congvanden::all();
//        return view('congvandi', ['Pages' => $pages]);
//    }

//    public function pages_index(){
//        $pages = tbl_congvandi::all();
//        return view('congvandi.index', ['Pages' => $pages]);
//    }
    public function getEdit($id){
        $pages = tbl_congvandi::find($id);
        return view('congvandi.edit',['Pages'=>$pages]);
    }
    public function getDestroy($id){
        tbl_congvandi::find($id)->delete();
        return redirect('pages/congvandi/danhsach')->with('thongbao','Pages deleted successfully');
    }
    public function getThem(){
         echo 'xin chào';
        $loaicongvan = Loaicongvan::all();
        $noiphathanh = Noiphathanh::all();
        $theloaicongvan = Theloaicongvan::all();
        $linhvuc = Linhvuc::all();
        $domat = DomatModel::all();
        $dokhan = DokhanModel::all();
        $phongban = PhongbanModel::all();
        $noiluucv = NoiluuModel::all();
        $nguoiky=NguoiKyModel::all();
        $coquan=CoQuanModel::all();
        return view ('congvandi.create',['Loaicongvan' => $loaicongvan,
            'Noiphathanh' => $noiphathanh,'Theloaicongvan' => $theloaicongvan,
            'Theloaicongvan' => $theloaicongvan,
            'linhvuc' => $linhvuc,'domat' => $domat,
            'dokhan' => $dokhan,'phongban' => $phongban,'noiluu' => $noiluucv,'nguoiky'=>$nguoiky,'coquan'=>$coquan]);
    }
    public function postThem(Request $request)
    {
        // $this->validate($request, [
        //     'page_name' => 'required',
        //     'page_title' => 'required',
        // 	'meta_title' => 'required',
        // ]);

        $pages = new tbl_congvandi;
        $pages->page_name=$request->page_name;
        $pages->page_title = $request->page_name;
        $pages->meta_title = $request->meta_title;
        $pages->meta_keyword = $request->meta_keyword;
        $pages->meta_description = $request->meta_description;
        $pages->is_active = $request->is_active;
        $pages->page_detail = $request->page_detail;

        $pages->save();
        return redirect('pages/congvandi/danhsach')->with('thongbao','Added successfully');
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request, [
            'page_name' => 'required',
            'page_title' => 'required',
            'meta_title' => 'required',
        ]);
        // Pages::find($id)->update($request->all());
        $pages = tbl_congvandi::find($id);
        $pages->page_name=$request->page_name;
        $pages->page_title = $request->page_name;
        $pages->meta_title = $request->meta_title;
        $pages->meta_keyword = $request->meta_keyword;
        $pages->meta_description = $request->meta_description;
        $pages->is_active = $request->is_active;
        $pages->page_detail = $request->page_detail;

        $pages->save();
        return redirect('pages/congvandi/danhsach')->with('thongbao','Edit successfully');
    }

}
