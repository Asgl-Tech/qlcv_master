<?php

namespace App\Http\Controllers;

use App\CoQuanModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CoQuanController extends Controller
{
    public function getCoQuan()
    {
        $tbl=CoQuanModel::all();
        return view('danhmuc.coquan.coquan_list',['coquan'=>$tbl]);
    }
    public function getCoQuan_Add()
    {
        return view('danhmuc.coquan.coquan_add');
    }
    public function postCoQuan_Add(Request $request)
    {
        $ten=$request->txtCoQuan;
        $coquan=new CoQuanModel();
        $coquan->TenCoQuan=$ten;
        $coquan->save();
        return redirect('pages/danhmuc/coquan/coquan_add')->with('thongbao','Thêm thành công');
    }
    function getCoQuan_Edit($id)
    {
        $coQuan=CoQuanModel::find($id);
        return view('danhmuc.coquan.coquan_edit',['coQuan'=>$coQuan]);
    }

    function postCoQuan_Edit(Request $request,$id)
    {
        $ten=$request->txtCoQuan;
        $coquan=CoQuanModel::find($id);
        $coquan->TenCoQuan=$ten;
        $coquan->save();
        return redirect('pages/danhmuc/coquan/coquan_edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getCoQuan_Del($id)
    {
        $coquan=CoQuanModel::find($id);
        $coquan->delete();
        return redirect('pages/danhmuc/coquan/coquan_list')->with('thongbao','Xóa thành công');
    }
}
