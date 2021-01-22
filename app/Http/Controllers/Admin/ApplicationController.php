<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\application\Application;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;
use App\Model\job\Major;
use App\Model\job\Job;
use Illuminate\Support\Facades\DB;


use App\Model\user\User;
use App\Notifications\ApplicationStatus;

class ApplicationController extends Controller
{
    public function index(Request $request){
        $applications = Application::orderByDesc('created_at')->get();
        $majors = Major::all();
        // dump($request);

        // dump($request->input());
        // if ($request->input('experience') != 'Unselected') {
        //     array_push($filter,['experience', '=', $request->input('experience')]);
        // }

        if ($request->isMethod('post')) {
            $search='';

            foreach ($request->input() as $key => $item) {
                $filter = '';

                if ($key == "experience"){
                    if ($item == "1") {
                        $filter = $key." between '0' and '0' ";
                    } elseif ($item == "2") {
                        $filter = $key." between '0' and '1' ";
                    }  elseif ($item == "3") {
                        $filter = $key." between '1' and '5' ";
                    }  elseif ($item == "4") {
                        $filter = $key." between '5' and '100' ";
                    }

                    if (strlen($filter) > strlen($key)){
                        $search = $search." ( ".$filter." ) and ";
                    }
                }

                if ($key == "_token" || $key == "experience") {
                    continue;
                } 
                else {

                    
                    for ($i = 0; $i < count($item); $i++) {
                        if ($item[$i] != 'Unselected') {
                            $filter = $filter.$key." = '".$item[$i]."' or ";
                        } else {
                            $filter = "1";
                            break;
                        }
                    }
                    
                }


                if (strlen($filter) > strlen($key)){
                    $search = $search." ( ".$filter." 0 ) and ";
                }

            }
            // if ($request->input('visa_status') != 'Unselected') {
            //     #array_push($filter,['profiles.visa_status', '=', $request->input('status')]);
            //     $filter = $filter."profiles.visa_status = '".$request->input('visa_status')."' and ";
            // }
    
            // if ($request->input('major') != 'Unselected') {
            //     #array_push($filter,['educations.major', '=', $request->input('major')]);
            //     $filter = $filter."educations.major = '".$request->input('major')."' and ";
            // }
    
            // if ($request->input('degree') != 'Unselected') {
            //     #array_push($filter,['educations.degree', '=', $request->input('degree')]);
            //     $filter = $filter."educations.degree = '".$request->input('degree')."' and";
            // }
            $search= $search." 1";
            // dump($search);
            $test = DB::table('applications')->join('profiles', function ($join){
                $join->on('applications.user_id','=','profiles.id');
            })->join('educations', function ($join){
                $join->on('applications.user_id','=','educations.user');
            })->join('experiences', function ($join){
                $join->on('applications.user_id','=','experiences.user');
            });

 

            $test = $test->whereRaw($search);
            $test = $test->select('applications.id')->get()->toArray();
            $ap_id = array();
            foreach ($test as $key => $value) {
                array_push($ap_id, $value->id);
            }
            if ($test == null) {
                $applications =  new Collection();
            } else {
                $applications = Application::where('id',$ap_id)->get();
            }
            
            return view('admin/application/show', ['applications'=>$applications,'majors'=>$majors]);
        }



        return view('admin/application/show', ['applications'=>$applications,'majors'=>$majors]);

    }

    public function update(Request $request){
        $temp = Application::find($request->input('id'));
        $user = User::find($request->input('user-id'));
        $temp->review = $request->input('review');
        $temp->status = $request->input('status');
        $temp->save();
        $user->notify(new ApplicationStatus($request));
        return redirect()->route('application_view');
    }


    public function delete($applicationid) {
        $temp = Application::find($applicationid)->delete();

        return redirect()->route('application_view');
    }

    private function savefile($file){

            //original name
            $originalName = $file->getClientOriginalName();
            //extension name
            $ext = $file->getClientOriginalExtension();
            //MimeType
            $type = $file->getClientMimeType();
            //set path
            $realPath = $file->getRealPath();
            $filename = uniqid().'.'.$ext;
//          $bool = Storage::disk('uploads')->put($filename,file_get_contents($realPath));
            #$path = $file->store('uploads');

            #$bf = 'storage/app/'.$path;
            #$st = 'public/storage/app/';
            $date = time();
            $final = 'uploads/';
            #copy($originalName,$final);
            #move_uploaded_file($)
            $path =$date.$originalName;
            $file->move($final,$path);



        return $path;
    }

    public function create(Request $request) {
        $application = new Application();
        $application->user_id =Auth::user()->id;
        $application->job_id = $request->input('jobid');
        if ($request->input('useprev_resume') == "1") {
            $application->resume_path = Auth::user()->resume;
        } else {
            $file = $request->file('resume');
            $rpath = $this->savefile($file);
            $application->resume_path = $rpath;
        }


        $file = $request->file('coverletter');
        if ($file != null) {
            $cpath = $this->savefile($file);
            $application->coverletter_path = $cpath;
        }

        $file = $request->file('transcript');

        if ($file != null) {
            $tpath = $this->savefile($file);
            $application->transcript_path = $tpath;
        }






        $applied= Application::where('user_id',$application->user_id)->where('job_id',$application->job_id)->get();
        if($applied->isNotEmpty())
        {
            #Session::flash('message', "You have applied this job");
            return redirect()->route('user_job');
        };

        $application->status = "pending";


        $application->review = "Processing";
        $application->save();


        #$sss = route('host').'/uploads/'.$application->resume_path;

        #Session::flash('message', "Application created");
        return redirect()->route('user_job');
    }






}
