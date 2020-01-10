<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NamcvModel extends Model
{
    protected $table ='tbl_namcv';
    public $timestamps = false;
    public function namcv()
    {
        return $this->hasMany('App\tbl_congvanden','id','id');
    }
}
