<?php

namespace App\Http\Controllers;

use App\PhongbanModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhongBanController extends Controller
{
    public function getPhongBan()
    {
        $tbl=PhongbanModel::all();
        //echo var_dump($tbl);
        return view('danhmuc.phongban.phongban_list',['phongban'=>$tbl]);
    }
    public function getPhongBan_Add()
    {
        return view('danhmuc.phongban.phongban_add');
    }
    public function postPhongBan_Add(Request $request)
    {
        $this->validate($request,
            [
                'txtTenPhong'=>'required|min:3|max:100'
                ,'txtMaPhong'=>'required'
                ,'txtEmail'=>'required'
            ],
            [
                'txtTenPhong.required'=>'Bạn chưa nhập tên phòng',
                'txtMaPhong.required'=>'Bạn chưa nhập mã phòng',
                'txtEmail.required'=>'Bạn chưa nhập email'
            ]);
        $ten=$request->txtTenPhong;
        $ma=$request->txtMaPhong;
        $email=$request->txtEmail;

        $phongBan=new PhongbanModel();
        $phongBan->TenPhong=$ten;
        $phongBan->MaPhong=$ma;
        $phongBan->Email=$email;

        $phongBan->save();
        return redirect('pages/danhmuc/phongban/phongban_add')->with('thongbao','Thêm thành công');
    }

    function getPhongBan_Edit($id)
    {
        $phongBan=PhongbanModel::find($id);

        return view('danhmuc.phongban.phongban_edit',['phongban'=>$phongBan]);
    }
    function postPhongBan_Edit(Request $request,$id)
    {
        $phongBan=PhongbanModel::find($id);
        $this->validate($request,
            [
                'txtTenPhong'=>'required'
                ,'txtMaPhong'=>'required'
                ,'txtEmail'=>'required'
            ],
            [
                'txtTenPhong.required'=>'Bạn chưa nhập tên phòng',
                'txtMaPhong.required'=>'Bạn chưa nhập mã phòng',
                'txtEmail.required'=>'Bạn chưa nhập email'
            ]);
        $ten=$request->txtTenPhong;
        $ma=$request->txtMaPhong;
        $email=$request->txtEmail;

        $phongBan->TenPhong=$ten;
        $phongBan->MaPhong=$ma;
        $phongBan->Email=$email;

        $phongBan->save();
        return redirect('pages/danhmuc/phongban/phongban_edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getPhongBan_Del($id)
    {
        $phongBan=PhongbanModel::find($id);
        $phongBan->delete();
        return redirect('pages/danhmuc/phongban/phongban_list')->with('thongbao','Xóa thành công');
    }
}
