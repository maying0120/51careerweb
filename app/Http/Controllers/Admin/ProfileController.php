<?php

namespace App\Http\Controllers\admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $users = DB::select("SELECT * FROM users");
        $educations = DB::select("SELECT * FROM educations");
        $showcases = DB::select("SELECT * FROM showcases");
        $projects = DB::select("SELECT * FROM experiences WHERE company IS NULL");
        $works = DB::select("SELECT * FROM experiences WHERE project IS NULL");
        $profiles = DB::select("SELECT * FROM profiles");
        return view('admin/profile/profile',compact('users', 'educations', 'showcases', 'projects', 'works', 'profiles', 'id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        profile::where('id',$id)->delete();
        return redirect()->back();
    }
}
