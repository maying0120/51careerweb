<?php

namespace App\Http\Controllers\User;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\application\Application;
use App\Model\user\profile;
use App\Model\job\Skill;

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
      $applications = Application::where('user_id', $id)->get();
      $skills = Skill::all();
      if ($profile->skills) {
        for ($i = 0; $i < count($skills); $i++){
          if (in_array($skills[$i]->name, $profile->skills)) {
            $skills[$i]->match = true;
          }
        }
      }

      return view('user/profile/profile',compact('user', 'projects', 'companies',
      'educations', 'showcases', 'applications', 'profile', 'skills', 'tab'));
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
      $profile->expected_title = $request->title;
      $profile->expected_countries = $request->countries;
      $profile->expected_states = $request->states;
      $profile->expected_cities = $request->cities;

      $profile->save();
      return back();
    }

    public function updateSkill(Request $request)
    {
      $profile = profile::where('user', auth()->user()->id)->first();
      $profile->skills = $request->skills;

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

    public function uploadTranscript(Request $request)
    {
      $profile = profile::where('user', auth()->user()->id)->first();
      $path = $request->file('transcript')->storeAs('profile', $request->file('transcript')->getClientOriginalName());
      $filename = explode("/", $path);
      $profile->transcript = end($filename);
      $profile->save();

      return back();
    }

    public function downloadTranscript(Request $request) {
      return response()->download(storage_path('app/profile/' . $request->filename));
    }
}
