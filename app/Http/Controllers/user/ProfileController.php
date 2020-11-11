<?php

namespace App\Http\Controllers\User;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\application\Application;
use App\Model\user\profile;

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

    public function index()
    {
      $user = auth()->user();
      $id = $user->id;
      // Select data specific to user
      $projects = DB::select("SELECT * FROM experiences WHERE user=$id AND company IS NULL");
      $companies = DB::select("SELECT * FROM experiences WHERE user=$id AND project IS NULL");
      $educations = DB::select("SELECT * FROM educations WHERE user=$id");
      $showcases = DB::select("SELECT * FROM showcases WHERE user=$id");
      $profile = Self::construct();
      $applications = Application::where('user_id', $id)->get();

      return view('user/profile/profile',compact('user', 'projects', 'companies', 'educations', 'showcases', 'applications', 'profile'));
    }

    public function uploadAvatar(Request $request)
    {
      $profile = profile::where('user', auth()->user()->id)->first();
      $path = $request->file('avatar')->store('public/avatar');
      $profile->avatar = $path;
      $profile->save();

      return back();
    }

    public function updateExpect(Request $request)
    {
      $profile = profile::where('user', auth()->user()->id)->first();
      $profile->expected_type = $request->type;
      $profile->expected_salary = $request->salary;
      $profile->expected_cities = $request->city;
      $profile->expected_title = $request->title;

      $profile->save();
      return back();
    }

    public function updateDescription(Request $request)
    {
      $profile = profile::where('user', auth()->user()->id)->first();
      $profile->description = $request->description;
      $profile->save();

      return back();
    }

    public function uploadResume(Request $request)
    {
      $profile = profile::where('user', auth()->user()->id)->first();
      $path = $request->file('resume')->storeAs('profile', $request->file('resume')->getClientOriginalName());
      $filename = explode("/", $path);
      $profile->resume = end($filename);
      $profile->save();

      return back();
    }

    public function downloadResume(Request $request) {
      return response()->download(storage_path('app/profile/' . $request->filename));
    }
}
