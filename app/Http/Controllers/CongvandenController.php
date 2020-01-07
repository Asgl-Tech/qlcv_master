<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\tbl_congvanden;
use App\Loaicongvan;
use App\Noiphathanh;
use App\Theloaicongvan;
use App\Linhvuc;
use App\DokhanModel;
use App\DomatModel;
use App\PhongbanModel;
use App\NoiluuModel;
use App\NamcvModel;
use Illuminate\Support\Facades\Auth;
class CongvandenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
		$pages = tbl_congvanden::all();
        return view('congvanden', ['Pages' => $pages]);				
    }
	
    public function pages_index(){
        $pages = tbl_congvanden::all();
        return view('congvanden.index', ['Pages' => $pages]);
    }
    public function getEdit($id){
        $loaicongvan = Loaicongvan::all();
        $congvanden = tbl_congvanden::find($id);
        $noiphathanh = Noiphathanh::all();
        $theloaicongvan = Theloaicongvan::all();
        $linhvuc = Linhvuc::all();
        $domat = DomatModel::all();
        $dokhan = DokhanModel::all();
        $phongban = PhongbanModel::all();
        $noiluucv = NoiluuModel::all();
        $namcv = NamcvModel::all();
        return view ('congvanden.edit',['congvanden'=>$congvanden,'Loaicongvan' => $loaicongvan,'Noiphathanh' => $noiphathanh,'Theloaicongvan' => $theloaicongvan,'Theloaicongvan' => $theloaicongvan,'linhvuc' => $linhvuc,'domat' => $domat,'dokhan' => $dokhan,'phongban' => $phongban,'noiluu' => $noiluucv,'namcv' => $namcv]);      
    }
    public function getDestroy($id){
        tbl_congvanden::find($id)->delete();
            return redirect('pages/congvanden/danhsach')->with('thongbao','Pages deleted successfully');
    }
    public function getThem(){
        // echo 'xin chào';
        $loaicongvan = Loaicongvan::all();
        $noiphathanh = Noiphathanh::all();
        $theloaicongvan = Theloaicongvan::all();
        $linhvuc = Linhvuc::all();
        $domat = DomatModel::all();
        $dokhan = DokhanModel::all();
        $phongban = PhongbanModel::all();
        $noiluucv = NoiluuModel::all();
        $namcv = NamcvModel::all();
        return view ('congvanden.create',['Loaicongvan' => $loaicongvan,'Noiphathanh' => $noiphathanh,'Theloaicongvan' => $theloaicongvan,'Theloaicongvan' => $theloaicongvan,'linhvuc' => $linhvuc,'domat' => $domat,'dokhan' => $dokhan,'phongban' => $phongban,'noiluu' => $noiluucv,'namcv' => $namcv]);
    }
     public function postThem(Request $request)
    {
        // $this->validate($request, [
        //     'page_name' => 'required',
        //     'page_title' => 'required',
		// 	'meta_title' => 'required',
        // ]);
 
        $pages = new tbl_congvanden;
        $pages->idLoaiCV=$request->Loaicongvan;
        $pages->NamCV = $request->nam;
        $pages->idNoiPhatHanh = $request->NoiPhathanh;
        $pages->SoDen = $request->Soden;
        $pages->KyHieu = $request->Sokyhieu;
        $pages->SoLuong = $request->Soluong;
        $pages->NgayThang = $request->Ngayden;
        $pages->NgayPhatHanh = $request->Ngayphathanh;
        $pages->idTheLoaiCV = $request->TheLoaicongvan;
        $pages->idLinhVuc = $request->Linhvuc;
        $pages->idDoMat = $request->Domat;
        $pages->idDoKhan = $request->Dokhan;
        $pages->TrichYeu = $request->Trichyeunoidung;
        $pages->GhiChu = $request->Noidungemail;
        $pages->EmailSend = $request->Emailkhac;
        $pages->EmailCC = $request->EmailCC;
        $pages->HanXuLy = $request->Hanxuly;
        // echo  $request->Hanxuly;
        $dataSet = [];
        $values ="";
        $dataSet= $request->Phongbanxuly;
        $values= json_encode( $dataSet, JSON_UNESCAPED_UNICODE );
        $values= str_replace('["','',$values);
        $values= str_replace('"]','',$values);
        $values= str_replace('"','',$values);
        $pages->NoiNhan = $values;
        $pages->idNoiLuu = $request->Noiluu;

        if($request->hasFile('Hinh'))
        {
            $file = $request->file('Hinh');
            // echo $file;
            $duoifile = $file->getClientOriginalExtension();
             
            if(strtoupper($duoifile) !='PDF' && strtoupper($duoifile) !='XLSX' && strtoupper($duoifile) !='DOC')
            {
                return redirect('pages/congvanden/danhsach')->with('thongbao','Đuôi file không hợp lệ');
            }
            $name= $file->getClientOriginalName();
            $filename = Str::random(4)."_". $name;
            while(file_exists("upload/file/".$filename))
            {
                $filename = Str::random(4)."_". $name;
            }
            echo $filename;
            $file->move("upload/file/",$name);
            // unlink("upload/file/".$pages->$filename);
            $pages->DuongDan=$name;
        }
        else
        {
            $pages->DuongDan="";
            // echo 'Không có';
        }        
        $pages->save();
        return redirect('pages/congvanden/danhsach/')->with('thongbao','Thêm công văn thành công');

    }
    
    public function postEdit(Request $request, $id)
    {
    //    $this->validate($request, [
    //         'page_name' => 'required',
    //         'page_title' => 'required',
	// 		'meta_title' => 'required',
    //     ]);
        $values ="";
        $dataSet = [];
        // Pages::find($id)->update($request->all());
        $pages = tbl_congvanden::find($id);       
        $pages->idLoaiCV=$request->Loaicongvan;
        $pages->NamCV = $request->nam;
        $pages->idNoiPhatHanh = $request->NoiPhathanh;
        $pages->SoDen = $request->Soden;
        $pages->KyHieu = $request->Sokyhieu;
        $pages->SoLuong = $request->Soluong;
        $pages->NgayThang = $request->Ngayden;
        $pages->NgayPhatHanh = $request->Ngayphathanh;
        $pages->idTheLoaiCV = $request->TheLoaicongvan;
        $pages->idLinhVuc = $request->Linhvuc;
        $pages->idDoMat = $request->Domat;
        $pages->idDoKhan = $request->Dokhan;
        $pages->TrichYeu = $request->Trichyeunoidung;
        $pages->GhiChu = $request->Noidungemail;
        $pages->EmailSend = $request->Emailkhac;
        $pages->EmailCC = $request->EmailCC;
        $pages->HanXuLy = $request->Hanxuly;
       
        echo  $request->Hanxuly;
        $dataSet= $request->Phongbanxuly;
        $values= json_encode( $dataSet, JSON_UNESCAPED_UNICODE );
        $values= str_replace('["','',$values);
        $values= str_replace('"]','',$values);
        $values= str_replace('"','',$values);
        $pages->NoiNhan = $values;
        $pages->idNoiLuu = $request->Noiluu;

        if($request->hasFile('Hinh'))
        {
            $file = $request->file('Hinh');
            // echo $file;
            $duoifile = $file->getClientOriginalExtension();
            // echo $duoifile;
            if(strtoupper($duoifile) !='PDF' && strtoupper($duoifile) !='XLSX' && strtoupper($duoifile) !='DOCX')
            {
                return redirect('pages/congvanden/danhsach')->with('thongbao','Đuôi file không hợp lệ');
            }
            $name= $file->getClientOriginalName();
            $filename = Str::random(4)."_". $name;
            while(file_exists("upload/file/".$filename))
            {
                $filename = Str::random(4)."_". $name;
            }
            echo $filename;
            $file->move("upload/file/",$name);
            // unlink("upload/file/".$pages->$filename);
            $pages->DuongDan=$name;
        }
        else
        {
            $pages->DuongDan="";
            // echo 'Không có';
        }        
        $pages->save();
        return redirect('pages/congvanden/danhsach/')->with('thongbao','Sửa công văn thành công');
    }
   
}
