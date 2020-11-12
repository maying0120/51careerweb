<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\application\Application;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;
use App\Model\user\User;
use App\Notifications\ApplicationStatus;

class ApplicationController extends Controller
{
    public function index(){
        $applications = Application::all();
        return view('admin/application/show', compact('applications'));

    }

    public function update(Request $request){
        $temp = Application::find($request->input('id'));
        $user = User::find($request->input('user-id'));
        $temp->review = $request->input('review');
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
        $application->user_id =Auth::id();
        $application->job_id = $request->input('jobid');


        $file = $request->file('resume');
        $rpath = $this->savefile($file);
        $application->resume_path = $rpath;
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
            Session::flash('message', "You have applied this job");
            return redirect()->route('user_job');
        };




        $application->review = "Processing";
        $application->save();


        #$sss = route('host').'/uploads/'.$application->resume_path;


        return redirect()->route('user_job');
    }






}
