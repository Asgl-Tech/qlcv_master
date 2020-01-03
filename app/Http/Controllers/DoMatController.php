<?php

namespace App\Http\Controllers;

use App\DomatModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoMatController extends Controller
{
    public function getDoMat()
    {
        $tbl=DomatModel::all()->sortBy('id');
        return view('danhmuc.domat.domat_list',['domat'=>$tbl]);
    }
    public function getDoMat_Add()
    {
        return view('danhmuc.domat.domat_add');
    }
    public function postDoMat_Add(Request $request)
    {
        $ten=$request->txtTenDoMat;
        $doMat=new DomatModel();
        $doMat->TenDoMat=$ten;
        $doMat->save();
        return redirect('pages/danhmuc/domat/domat_add')->with('thongbao','Thêm thành công');
    }

    function getDoMat_Edit($id)
    {
        $doMat=DomatModel::find($id);
        return view('danhmuc.domat.domat_edit',['doMat'=>$doMat]);
    }
    function postDoMat_Edit(Request $request,$id)
    {
        $ten=$request->txtTenDoMat;
        $doKhan=DomatModel::find($id);
        $doKhan->TenDoMat=$ten;
        $doKhan->save();
        return redirect('pages/danhmuc/domat/domat_edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getDoMat_Del($id)
    {
        $doKhan=DomatModel::find($id);
        $doKhan->delete();
        return redirect('pages/danhmuc/domat/domat_list')->with('thongbao','Xóa thành công');
    }
}
