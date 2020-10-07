<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\application\Application;

class ApplicationController extends Controller
{
    public function index(){
        $applications = Application::all();
        // for ($i = 0; $i < count($applications); $i++){
        //    // dump($applications[$i]->user->name);
        // }
        // dump($applications);
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







}
