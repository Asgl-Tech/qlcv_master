<?php

namespace App\Http\Controllers;

use App\Linhvuc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LinhVucController extends Controller
{
    public function getLinhVuc()
    {
        $tbl=Linhvuc::all();
        //echo var_dump($tbl);
        return view('danhmuc.linhvuc.linhvuc_list',['linhvuc'=>$tbl]);
    }
    public function getLinhVuc_Add()
    {
        return view('danhmuc.linhvuc.linhvuc_add');
    }
    public function postLinhVuc_Add(Request $request)
    {
        $this->validate($request,
            [
                'txtTenLinhVuc'=>'required|unique:tbl_linhvuc,TenLinhVuc'
            ],
            [
                'txtTenLinhVuc.required'=>'Bạn chưa nhập tên lĩnh vực',
                'txtTenLinhVuc.unique'=>'Đã tồn tại tên lĩnh vực',
            ]);
        $ten=$request->txtTenLinhVuc;
        $linhVuc=new Linhvuc();
        $linhVuc->TenLinhVuc=$ten;

        $linhVuc->save();
        return redirect('pages/danhmuc/linhvuc/linhvuc_add')->with('thongbao','Thêm thành công');
    }

    function getLinhVuc_Edit($id)
    {
        $phongBan=Linhvuc::find($id);
        return view('danhmuc.linhvuc.linhvuc_edit',['linhVuc'=>$phongBan]);
    }
    function postLinhVuc_Edit(Request $request,$id)
    {
        $this->validate($request,
            [
                'txtTenLinhVuc'=>'required|unique:tbl_linhvuc,TenLinhVuc'
            ],
            [
                'txtTenLinhVuc.required'=>'Bạn chưa nhập tên lĩnh vực',
                'txtTenLinhVuc.unique'=>'Đã tồn tại tên lĩnh vực',
            ]);
        $ten=$request->txtTenLinhVuc;
        $linhVuc=Linhvuc::find($id);
        $linhVuc->TenLinhVuc=$ten;

        $linhVuc->save();
        return redirect('pages/danhmuc/linhvuc/linhvuc_edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getLinhVuc_Del($id)
    {
        $phongBan=Linhvuc::find($id);
        $phongBan->delete();
        return redirect('pages/danhmuc/linhvuc/linhvuc_list')->with('thongbao','Xóa thành công');
    }
}
