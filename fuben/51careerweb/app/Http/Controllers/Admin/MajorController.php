<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\job\Major;


class MajorController extends Controller
{
    public function index() {
        $majors = Major::all();
        return view('admin/major/show', compact('majors'));
    }

    public function edit($majorid) {
        $temp = Major::find($majorid);
        return view('admin/major/edit', ['major' => $temp]);
    }

    public function add(Request $request) {
        if ($request->input('id') != null){
            $temp = Major::find($request->input('id'));
            $temp->fill($request->all());
            $temp->save();
        }
        else {
            $temp = new Major();
            $temp->fill($request->all());
            $temp->save();
        }

        return redirect()->route('major_view');
    }

    public function delete($majorid) {
        $temp = Major::find($majorid)->delete();
        
        return redirect()->route('major_view');
    }

    public function create(){
        return view('/admin/major/major');
    }

}