<?php

namespace App\Http\Controllers;

use App\Theloaicongvan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TheLoaiController extends Controller
{
    public function getTheLoai()
    {
        $tbl = Theloaicongvan::all();
        return view('danhmuc.theloaicv.theloaicv_list', ['theloai' => $tbl]);
    }

    public function getTheLoai_Add()
    {
        return view('danhmuc.theloaicv.theloaicv_add');
    }

    public function postTheLoai_Add(Request $request)
    {
        $this->validate($request,
            [
                'txtMaTheLoai' => 'required|unique:tbl_theloai,MaTheLoai'
                , 'txtTenTheLoai' => 'required'
            ],
            [
                'txtMaTheLoai.required' => 'Bạn chưa nhập mã',
                'txtMaTheLoai.unique' => 'Đã nhập trùng mã',
                'txtTenTheLoai.required' => 'Bạn chưa nhập tên'
            ]);
        $ten = $request->txtMaTheLoai;
        $ma = $request->txtTenTheLoai;

        $theLoai = new Theloaicongvan();
        $theLoai->MaTheLoai = $ten;
        $theLoai->TenTheLoai = $ma;

        $theLoai->save();

        return redirect('pages/danhmuc/theloaicv/theloaicv_add')->with('thongbao', 'Thêm thành công');
    }

    function getTheLoai_Edit($id)
    {
        $theLoai = Theloaicongvan::find($id);

        return view('danhmuc.theloaicv.theloai_edit', ['theLoai' => $theLoai]);
    }

    function postTheLoai_Edit(Request $request, $id)
    {

        $this->validate($request,
            [
                'txtMaTheLoai' => 'required'
                , 'txtTenTheLoai' => 'required'
            ],
            [
                'txtMaTheLoai.required' => 'Bạn chưa nhập mã',
                'txtTenTheLoai.required' => 'Bạn chưa nhập tên'
            ]);
        $ten = $request->txtTenTheLoai;
        $ma = $request->txtMaTheLoai;

        $theLoai = Theloaicongvan::find($id);
        $theLoai->MaTheLoai =$ma ;
        $theLoai->TenTheLoai = $ten;
        $theLoai->save();
        return redirect('pages/danhmuc/theloaicv/theloaicv_edit/' . $id)->with('thongbao', 'Sửa thành công');
    }

    public function getTheLoai_Del($id)
    {
        $theLoai = Theloaicongvan::find($id);
        $theLoai->delete();
        return redirect('pages/danhmuc/theloaicv/theloaicv_list')->with('thongbao', 'Xóa thành công');
    }
}
