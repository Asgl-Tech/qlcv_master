<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_congvanden extends Model
{
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $primaryKey = 'id';
    public $timestamps = false;
      protected $fillable = [
         'idLoaiCV', 'NamCV', 'NgayThang', 'GioDen', 'SoDen', 'idNoiPhatHanh', 'KyHieu', 'NgayPhatHanh', 'idTheLoaiCV','idLinhVuc','idDoMat','idDoKhan','SoLuong','TrichYeu','idNoiNhan','DuongDan','GhiChu','idNoiLuu','TinhTrang','HanXuLy','EmailAdd','EmailSend','SendMailTime','EmailCC'
     ];
 
     /**
      * The attributes that should be hidden for arrays.
      *
      * @var array
      */
    
      public function tbl_congvanden(){
       return $this->belongsTo('App\congvanden');
      }

      // public function loaicongvan()
      // {
      //   return $this->hasMany('App\Loaicongvan','id','idLoaiCV');
      // }


      // public function nam()
      // {
      //   return $this->belongsTo('App\NamcvModel','NamCV','id');
      // }

}
