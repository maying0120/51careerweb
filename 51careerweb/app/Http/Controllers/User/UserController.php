<?php

namespace App\Http\Controllers\User;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = auth()->user();

      // Select data specific to user
      $projects = DB::select("SELECT * FROM experiences WHERE user={$user->id} AND company IS NULL");
      $companies = DB::select("SELECT * FROM experiences WHERE user={$user->id} AND project IS NULL");
      $educations = DB::select("SELECT * FROM educations WHERE user={$user->id}");
      $showcases = DB::select("SELECT * FROM showcases WHERE user={$user->id}");

      return view('user/profile/profile',compact('user', 'projects', 'companies', 'educations', 'showcases'));
    }

}
