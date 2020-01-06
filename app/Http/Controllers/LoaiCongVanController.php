<?php

namespace App\Http\Controllers;

use App\Loaicongvan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoaiCongVanController extends Controller
{
    public function getLoaiCv()
    {
        $tbl=Loaicongvan::all();
        return view('danhmuc.loaicv.loaicv_list',['loaicv'=>$tbl]);
    }
    public function getLoaiCv_Add()
    {
        return view('danhmuc.loaicv.loaicv_add');
    }
    public function postLoaiCv_Add(Request $request)
    {
        $ten=$request->txtTenLoaiCv;
        $doKhan=new Loaicongvan();
        $doKhan->TenLoaiCV=$ten;
        $doKhan->save();
        return redirect('pages/danhmuc/loaicv/loaicv_add')->with('thongbao','Thêm thành công');
    }

    function getLoaiCv_Edit($id)
    {
        $loaiCv=Loaicongvan::find($id);
        return view('danhmuc.loaicv.loaicv_edit',['loaiCv'=>$loaiCv]);
    }

    function postLoaiCv_Edit(Request $request,$id)
    {
        $ten=$request->txtTenLoaiCv;
        $loaiCv=Loaicongvan::find($id);
        $loaiCv->TenLoaiCV=$ten;
        $loaiCv->save();
        return redirect('pages/danhmuc/loaicv/loaicv_edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getLoaiCv_Del($id)
    {
        $loaiCv=Loaicongvan::find($id);
        $loaiCv->delete();
        return redirect('pages/danhmuc/loaicv/loaicv_list')->with('thongbao','Xóa thành công');
    }
}
