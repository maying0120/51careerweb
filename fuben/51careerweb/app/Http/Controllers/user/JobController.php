<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\job\Job;

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

     public function ajaxtest(Request $request){

      $curtime = date('Y-m-d' , time());
      $jobs = Job::where('expire_time', '>=', $curtime );



      if ($request->input('location') != null && $request->input('location') != 'Location' )  {
         $jobs = $jobs->where('location',$request->input('location'));

      }
      if ($request->input('industry') != null && $request->input('industry') != 'Industry') {
         $jobs = $jobs->Where('industry', 'like' , '%'.$request->input('industry').'%');
      }

      if ($request->input('exp_level') != null && $request->input('exp_level') != 'Exp Level') {
         $jobs = $jobs->Where('exp_level',$request->input('exp_level'));
      }

      return response()->json(array('jobs'=> $jobs->get()), 200);
   }


  }
