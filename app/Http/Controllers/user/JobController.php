<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class JobController extends Controller
{

   public function index()
      {

      return view('user/job/job');
      }


     public function detail()
     {
      return view('user/job/jobdetail');
     }


     public function apply()
     {
      return view('user/job/jobapply');
     }


  }
