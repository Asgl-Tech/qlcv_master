<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DokhanModel extends Model
{
    protected $table ='tbl_dokhan';
    public function tbl_congvanden()
    {
        return $this->hasMany('App\tbl_congvanden','id','id');
    }
}
