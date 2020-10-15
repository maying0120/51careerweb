<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\application\Application;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;

class ApplicationController extends Controller
{
    public function index(){
        $applications = Application::all();
        return view('admin/application/show', compact('applications'));

    }

    public function update(Request $request){
        $temp = Application::find($request->input('id'));
        $temp->review = $request->input('review');
        $temp->save();
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
//            $bool = Storage::disk('uploads')->put($filename,file_get_contents($realPath));
            $path = $file->store('uploads');

        return $path;
    }

    public function create(Request $request) {

        $application = new Application();
        $application->user_id = Auth::id();
        $application->job_id = $request->input('jobid');



        $file = $request->file('resume');
        $rpath = $this->savefile($file);
        $application->resume_path = 'storage/app/'.$rpath;
        $file = $request->file('coverletter');
        if ($file != null) {
            $cpath = $this->savefile($file);
            $application->coverletter_path = 'storage/app/'.$cpath;
        }

        $file = $request->file('transcript');

        if ($file != null) {
            $tpath = $this->savefile($file);
            $application->transcript_path = 'storage/app/'.$tpath;
        }






        $applied= Application::where('user_id',$application->user_id)->where('job_id',$application->job_id)->get();
        if($applied->isNotEmpty())
        {
            Session::flash('message', "You have applied this job");
            return redirect()->route('user_job');
        };




        $application->save();

        return redirect()->route('user_job');
    }






}
