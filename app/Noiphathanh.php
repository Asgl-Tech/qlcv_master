<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noiphathanh extends Model
{
    protected $table ='tbl_coquan';
    public $timestamps = false;
    public function tbl_congvanden()
    {
        return $this->hasMany('App\tbl_congvanden','id','id');
    }
}
