<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\job\Job;


class JobController extends Controller
{
    //
    public function index()
    {

        $jobs = Job::all();
        return view('admin/job/show', compact('jobs'));
    }

    public function edit($jobid)
    {
        $temp = Job::find($jobid);

        return view('admin/job/edit', ['job' => $temp]);
    }


    public function add(Request $request)
    {  
        
        if ($request->input('id') != null){

            $temp = Job::find($request->input('id'));
            $temp->fill($request->all());

            $temp->save();
        }
        else {
            $temp = new Job();
            $temp->fill($request->all());
            $temp->save();
        }
        // $jobs = Job::all();
        // return view('admin/job/show', compact('jobs'));
        return redirect()->route('job_view');
    }

    public function delete($jobid) {
        $temp = Job::find($jobid)->delete();
        
        return redirect()->route('job_view');
    }

    public function create(){
        return view('/admin/job/job');
    }

}
