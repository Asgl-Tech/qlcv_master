<?php

namespace App\Http\Controllers;

use App\NguoiKyModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NguoiKyController extends Controller
{
    public function getNguoiKy()
    {
        $tbl = NguoiKyModel::all();
        //echo var_dump($tbl);
        return view('danhmuc.nguoiky.nguoiky_list', ['nguoiky' => $tbl]);
    }

    public function getNguoiKy_Add()
    {
        return view('danhmuc.nguoiky.nguoiky_new');
    }

    public function postNguoiKy_Add(Request $request)
    {
        $this->validate($request,
            [
                'txtHoTen' => 'required'
                , 'txtChucVu' => 'required'
            ],
            [
                'txtHoTen.required' => 'Bạn chưa nhập họ tên người ký',
                'txtChucVu.required' => 'Bạn chưa nhập chức vụ'
            ]);
        $ten = $request->txtHoTen;
        $ma = $request->txtChucVu;

        $nguoiKy = new NguoiKyModel();
        $nguoiKy->HoTen = $ten;
        $nguoiKy->ChucVu = $ma;

        $nguoiKy->save();
        return redirect('pages/danhmuc/nguoiky/nguoiky_add')->with('thongbao', 'Thêm thành công');
    }

    function getNguoiKy_Edit($id)
    {
        $nguoiKy = NguoiKyModel::find($id);
        return view('danhmuc.nguoiky.nguoiky_edit', ['nguoiKy' => $nguoiKy]);
    }

    function postNguoiKy_Edit(Request $request, $id)
    {
        $this->validate($request,
            [
                'txtHoTen' => 'required'
                , 'txtChucVu' => 'required'
            ],
            [
                'txtHoTen.required' => 'Bạn chưa nhập họ tên người ký',
                'txtChucVu.required' => 'Bạn chưa nhập chức vụ'
            ]);
        $ten = $request->txtHoTen;
        $ma = $request->txtChucVu;
        $nguoiKy = NguoiKyModel::find($id);
        $nguoiKy->HoTen = $ten;
        $nguoiKy->ChucVu = $ma;

        $nguoiKy->save();
        return redirect('pages/danhmuc/nguoiky/nguoiky_edit/'.$id)->with('thongbao', 'Thêm thành công');
    }

    public function getNguoiKy_Del($id)
    {
        $nguoiKy = NguoiKyModel::find($id);
        $nguoiKy->delete();
        return redirect('pages/danhmuc/nguoiky/nguoiky_list')->with('thongbao', 'Xóa thành công');
    }
}
