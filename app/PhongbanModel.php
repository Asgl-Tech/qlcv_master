<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongbanModel extends Model
{
    protected $table ='tbl_phongban';
    public function tbl_congvanden()
    {
        return $this->hasMany('App\tbl_congvanden','id','id');
    }
}
