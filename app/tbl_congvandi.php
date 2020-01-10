<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_congvandi extends Model
{
    protected $table ='tbl_congvandi';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $primaryKey = 'id';
    //  public $timestamps = false;
//    protected $fillable = [
//        'NgayPhatHanh', 'GioPhatHanh', 'MaPhongPH', 'KyHieu', 'TrichYeu', 'idNguoiKy', 'idTheLoaiCV',
//        'idLoaiCV', 'idLinhVuc','idDoMat','idDoKhan','idNoiNhan','NamCV','idPhongLuu','SoLuong','DuongDan',
//        'GhiChu','So','EmailAdd','CanCu','EmailSend','EmailSendTime','EmailCC'
//    ];
//
//id int(11) NOT NULL AUTO_INCREMENT,
//NgayPhatHanh date DEFAULT NULL,
//GioPhatHanh varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
//MaPhongPH varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
//KyHieu varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
//TrichYeu longtext DEFAULT NULL,
//idNguoiKy int(11) DEFAULT NULL,
//idTheLoaiCV int(11) DEFAULT NULL,
//idLoaiCV int(11) DEFAULT NULL,
//idLinhVuc int(11) DEFAULT NULL,
//idDoMat int(11) DEFAULT NULL,
//idDoKhan int(11) DEFAULT NULL,
//idNoiNhan int(11) DEFAULT NULL,
//NamCV int(11) DEFAULT NULL,
//idPhongLuu int(11) DEFAULT NULL,
//SoLuong int(11) DEFAULT NULL,
//DuongDan longtext DEFAULT NULL,
//GhiChu longtext DEFAULT NULL,
//So int(11) DEFAULT NULL,
//EmailAdd longtext DEFAULT NULL,
//CanCu varchar(30) DEFAULT NULL,
//EmailSend longtext DEFAULT NULL,
//EmailSendTime datetime DEFAULT NULL,
//EmailCC varchar(200) DEFAULT NULL,
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function tbl_convandi(){
        return $this->belongsTo('App\congvandi');
    }
}
