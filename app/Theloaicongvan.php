<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theloaicongvan extends Model
{
    protected $table ='tbl_theloai';
    public function tbl_congvanden()
    {
        return $this->hasMany('App\tbl_congvanden','id','id');
    }
}
