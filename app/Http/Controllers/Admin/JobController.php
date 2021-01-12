<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\job\Job;
use App\Model\job\Skill;
use App\Model\job\Major;
use App\Model\job\Industry;

use App\Model\location\City;
use App\Model\location\Country;
use App\Model\location\State;


class JobController extends Controller
{
    //
    public function index()
    {

        $jobs = Job::orderByDesc('created_at')->get();
        
        return view('admin/job/show', compact('jobs'));
    }

    public function edit($jobid)
    {
        $temp = Job::find($jobid);
        $temp->industry = explode (";", $temp->industry);
        $temp->skill = explode (";", $temp->skill);
        $temp->major = explode (";", $temp->major);
        $temp->visa_status = explode (";", $temp->visa_status);
        
        $skills = Skill::all();
        for ($i = 0; $i < count($skills); $i++){
            for ($y = 0; $y < count($temp->skill); $y++){
                if ($skills[$i]->name == $temp->skill[$y]) {
                    $skills[$i]->match = true;
                } 
            }
        }
 
        
        $majors = Major::all();
        for ($i = 0; $i < count($majors); $i++){
            for ($y = 0; $y < count($temp->major); $y++){
                if ($majors[$i]->name == $temp->major[$y]) {
                    $majors[$i]->match = true;
                } 
            }
        }

        $industries = Industry::all();
        for ($i = 0; $i < count($industries); $i++){
            for ($y = 0; $y < count($temp->industry); $y++){
                if ($industries[$i]->name == $temp->industry[$y]) {
                    $industries[$i]->match = true;
                } 
            }
        }

        

        $visa=array(
            "type"  => array('OPT','H1B','Green Card','Citizen'),
            "match"  => array(false,false,false,false),
            
        );


        for ($i = 0; $i < count($visa['type']); $i++){
            for ($y = 0; $y < count($temp->visa_status); $y++){
                if ($visa['type'][$i] == $temp->visa_status[$y]) {
                    $visa['match'][$i] = true;
                } 
            }
        }

        
        $countryid = Country::where('name',$temp->country)->first()->id;
        $stateid = State::where('name',$temp->state)->where('country_id',$countryid)->first()->id;


        
        return view('admin/job/edit', ['job' => $temp, 'skills' => $skills,'majors' => $majors, 'industries' => $industries, 'visas'=>$visa,'countryid'=>$countryid, 'stateid'=>$stateid]);
    }


    public function add(Request $request)
    {  
        if ($request->input('id') != null){
            
            $temp = Job::find($request->input('id'));
            $temp->fill($request->all());

            $country = Country::where('id',$temp->country)->first();
            $temp->country = $country->name;
           
            $state = State::where('id',$temp->state)->first();
            $temp->state = $state->name;
            

            $temp->industry = join(";", $temp->industry);
            $temp->skill = join(";", $temp->skill);
            $temp->major = join(";", $temp->major);
            $temp->visa_status = join(";", $temp->visa_status);
            $temp->save();
        }
        else {
            $temp = new Job();
            $temp->fill($request->all());
            $temp->industry = join(";", $temp->industry);
            $temp->skill = join(";", $temp->skill);
            $temp->major = join(";", $temp->major);
            $temp->visa_status = join(";", $temp->visa_status);
            $temp->save();
        }

        // $jobs = Job::all();
        // return view('admin/job/show', compact('jobs'));
        return redirect()->route('job_view');
        //return response()->json(array('jobs'=> $request->all()), 200);
    }

    public function delete($jobid) {
        $temp = Job::find($jobid)->delete();
        
        return redirect()->route('job_view');
    }

    public function create(){
        
        $skills = Skill::all();
        $majors = Major::all();
        $industries = Industry::all();
        $visa=array('OPT','H1B','Green Card','Citizen');
        return view('/admin/job/job',['skills' => $skills,'majors' => $majors, 'industries' => $industries, 'visas'=>$visa]);
    }





}
