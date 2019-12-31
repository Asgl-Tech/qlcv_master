<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaicongvan extends Model
{
    protected $table ='tbl_loaicv';
    public function tbl_congvanden()
    {
        return $this->hasMany('App\tbl_congvanden','id','id');
    }

    // public function tintuc()
    // {
    //     return $this->hasManyThrough('App\TinTuc','App\LoaiTin','idTheLoai','idLoaiTin','id');
    // }
}
