<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoiluuModel extends Model
{
    protected $table ='tbl_noiluu';
    public function tbl_congvanden()
    {
        return $this->hasMany('App\tbl_congvanden','id','id');
    }
}
