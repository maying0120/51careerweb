<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\job\Job;
use Illuminate\Support\Facades\DB;
use App\Model\user\Profile;

class JobController extends Controller
{

   public function index($id = null)
      {

         $curtime = date('Y-m-d' , time());
         #$jobs = Job::where('expire_time', '>=', $curtime );
         $locations = array('New York','Los Angeles','Dallas','Brooklyn','Houston','Chicago');
         $industries = array('Technology','Media','Goverment','Medical','Development','Accounting');


         $jobsbylo = DB::table('jobs')
               ->select(DB::raw('count(1) as citycount, city'))
               ->where('expire_time', '>=', $curtime )
               ->whereIn('city',$locations)
               ->groupBy('city')
               ->get();


         #search recommend jobs for user
         $id_start = strpos($id,"-");
         $id = substr($id, $id_start+1, strlen($id));

         if ($id != null) {
            $curtime = date('Y-m-d' , time());
            $jobs = Job::where('expire_time', '>=', $curtime );
            $user_profile = Profile::where('id',$id)->first();
            $jobs = $jobs->where('city','like','%'.$user_profile->expect_city.'%')
                         ->where('job_type','like','%'.$user_profile->expect_type.'%')
                         ->where('position','like','%'.$user_profile->expect_position.'%')
                         ->get();
         } else {
            $jobs = null;
         }
         $rec_jobs = json_encode($jobs);

        return view('user/job/job',['jobsbylo'=>$jobsbylo, 'rec_jobs'=>$rec_jobs]);
      }


     public function detail()
     {
      return view('user/job/jobdetail');
     }

     public function ajaxtest(Request $request){

      $curtime = date('Y-m-d' , time());
      $jobs = Job::where('expire_time', '>=', $curtime );



      if ($request->input('location') != null && $request->input('location') != 'Location' )  {
         $jobs = $jobs->where('city',$request->input('location'));

      }
      if ($request->input('industry') != null && $request->input('industry') != 'Industry') {
         $jobs = $jobs->Where('industry', 'like' , '%'.$request->input('industry').'%');
      }

      if ($request->input('exp_level') != null && $request->input('exp_level') != 'Exp Level') {
         $jobs = $jobs->Where('exp_level',$request->input('exp_level'));
      }

      
      // dump($jobs->get());
      return response()->json(array('jobs'=> $jobs->get()), 200);
   }


  }
