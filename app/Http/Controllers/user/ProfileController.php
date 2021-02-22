<?php

namespace App\Http\Controllers\User;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\application\Application;
use App\Model\user\profile;
use App\Model\job\Skill;
use App\Model\job\Job;

class ProfileController extends Controller
{
    public function construct()
    {
      $profile = profile::where('user', auth()->user()->id)->first();
      if (!$profile) {
        $profile = new profile();
        $profile->user = auth()->user()->id;
        $profile->save();
      }

      return $profile;
    }

    public function index($tab)
    {
      $user = auth()->user();
      $id = $user->id;
      $profile = Self::construct();
      // Select data specific to user
      $projects = DB::select("SELECT * FROM experiences WHERE user=$id AND company IS NULL");
      $companies = DB::select("SELECT * FROM experiences WHERE user=$id AND project IS NULL");
      $educations = DB::select("SELECT * FROM educations WHERE user=$id");
      $showcases = DB::select("SELECT * FROM showcases WHERE user=$id");
      $locations = DB::select("SELECT country, state, city FROM jobs GROUP BY country, state, city");
      $applications = Application::where('user_id', $id)->get();
      $skills = Skill::all();

      return view('user/profile/profile',compact('user', 'projects', 'companies',
      'educations', 'showcases', 'applications', 'profile', 'skills', 'locations', 'tab'));
    }

    public function uploadAvatar(Request $request)
    {
      $profile = Self::construct();
      $path = $request->file('avatar')->store('public/user/' .$profile->user . '/avatar');
      $profile->avatar = $path;
      $profile->save();

      return back();
    }

    public function updateExpect(Request $request)
    {
      $profile = Self::construct();
      $profile->expect_type = $request->type;
      $profile->expect_salary = $request->salary;
      $profile->expect_title = $request->title;
      $profile->expect_locations = $request->locations;
      $profile->visa = $request->visa;

      $profile->save();
      return back();
    }

    public function updateSkill(Request $request)
    {
      $profile = Self::construct();
      $profile->skills = $request->skills;

      $profile->save();
      return back();
    }

    public function updateDescription(Request $request)
    {
      $profile = Self::construct();
      $profile->description = $request->description;
      $profile->save();

      return back();
    }

    public function uploadResume(Request $request)
    {
      $profile = Self::construct();
      $path = $request->file('resume')->storeAs('user/'. $profile->user. '/profile/resume',  $request->file('resume')->getClientOriginalName());
      $profile->resume = $path;
      $profile->save();

      return back();
    }

    public function downloadResume(Request $request) {
      return response()->download(storage_path('app/'. $request->path));
    }

    public function uploadTranscript(Request $request)
    {
      $profile = Self::construct();
      $path = $request->file('transcript')->storeAs('user/'. $profile->user. '/profile/transcript', $request->file('transcript')->getClientOriginalName());
      $profile->transcript = $path;
      $profile->save();

      return back();
    }

    public function downloadTranscript(Request $request) {
      return response()->download(storage_path('app/'. $request->path));
    }
}
