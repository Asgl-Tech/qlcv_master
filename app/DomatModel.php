<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomatModel extends Model
{
    protected $table ='tbl_domat';
    public $timestamps=false;

    public function tbl_congvanden()
    {
        return $this->hasMany('App\tbl_congvanden','id','id');
    }
}
