<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TestController extends Controller
{
    public function t1(){
        return view('user/job/t1');
    }
    public function t2(){
        return view('user/job/t2');
    }
    public function t3(){
        return view('user/job/t3');
    }

}