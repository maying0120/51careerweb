<?php

namespace App\Http\Controllers\admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\user;
use App\Model\user\education;
use App\Model\user\showcase;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $users = user::all();
        $educations = education::all();
        $showcases = showcase::all();
        $projects = DB::select("SELECT * FROM experiences WHERE company IS NULL");
        $works = DB::select("SELECT * FROM experiences WHERE project IS NULL");
        return view('admin/profile/profile',compact('users', 'educations', 'showcases', 'projects', 'works', 'id'));
    }

}
