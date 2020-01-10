<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\CoQuanModel;
use App\Http\Controllers\Controller;
use App\NguoiKyModel;
use App\tbl_congvandi;
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

    public function pages_index(){
        $pages = tbl_congvandi::all();
        return view('congvandi.index', ['Pages' => $pages]);
    }
    public function getDestroy($id){
        tbl_congvandi::find($id)->delete();
        return redirect('pages/congvandi/danhsach')->with('thongbao','Pages deleted successfully');
    }
    public function getThem(){
//         echo 'xin chào';
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


        $congvandi = new tbl_congvandi();
     //  echo(Carbon::parse($request->NgayPhatHanh)->format('d/m/Y'));
        $congvandi->NgayPhatHanh =Carbon::parse($request->NgayPhatHanh)->format('Y-m-d');
        $congvandi->GioPhatHanh==Carbon::parse($request->NgayPhatHanh)->format('H:i:s');
        $congvandi->KyHieu=$request->Sokyhieu;
        $congvandi->TrichYeu=$request->Trichyeunoidung;
        $congvandi->idNguoiKy=$request->nguoiky;
        $congvandi->idTheLoaiCV=$request->TheLoaicongvan;
        $congvandi->idLoaiCV=$request->Loaicongvan;
        $congvandi->idLinhVuc=$request->Linhvuc;
        $congvandi->idDoMat=$request->Domat;
        $congvandi->idDoKhan=$request->Dokhan;
        $congvandi->idNoiNhan=$request->idNoiNhan;
        $congvandi->NamCV=$request->nam;
        $congvandi->idPhongLuu=$request->Phongbanxuly;
        $congvandi->SoLuong=$request->soluongban;
       $congvandi->save();

        return redirect('pages/congvandi/danhsach')->with('thongbao','Added successfully');
    }

    public function getEdit($id){
//         echo 'xin chào';
        $congvandi = tbl_congvandi::find($id);
        echo($congvandi->idNguoiKy);
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
            'dokhan' => $dokhan,'phongban' => $phongban,'noiluu' => $noiluucv,'nguoiky'=>$nguoiky,'coquan'=>$coquan,'congvandi'=>$congvandi]);
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
