<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguoiKyModel extends Model
{

    protected  $table='tbl_nguoiky';
    public  function tbl_nguoiky()
    {
        return $this->hasMany('App\tbl_congvandi','id','id_nguoiky');
    }

}
