<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DokhanModel;

class DoKhanController extends Controller
{
    public function getDoKhan()
    {
        $tbl=DokhanModel::all();
        //echo var_dump($tbl);
       return view('danhmuc.dokhan.dokhan_list',['dokhan'=>$tbl]);
    }
    public function getDoKhan_Add()
    {
        return view('danhmuc.dokhan.dokhan_add');
    }
    public function postDoKhan_Add(Request $request)
    {
        $ten=$request->txtTenDoKhan;
        $doKhan=new DokhanModel();
        $doKhan->TenDoKhan=$ten;
        $doKhan->save();
        return redirect('pages/danhmuc/dokhan/dokhan_add')->with('thongbao','Thêm thành công');
    }

    function getDoKhan_Edit($id)
    {
        $doKhan=DokhanModel::find($id);
        return view('danhmuc.dokhan.dokhan_edit',['doKhan'=>$doKhan]);
    }
    function postDoKhan_Edit(Request $request,$id)
    {
        $ten=$request->txtTenDoKhan;
        $doKhan=DokhanModel::find($id);
        $doKhan->TenDoKhan=$ten;
        $doKhan->save();
        return redirect('pages/danhmuc/dokhan/dokhan_edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getDoKhan_Del($id)
    {
        $doKhan=DokhanModel::find($id);
        $doKhan->delete();
        return redirect('pages/danhmuc/dokhan/dokhan_list')->with('thongbao','Xóa thành công');
    }

}
