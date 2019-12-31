<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoKhanController extends Controller
{
    public function getDoKhan()
    {
       return view('danhmuc.dokhan.dokhan_list');
    }

}
