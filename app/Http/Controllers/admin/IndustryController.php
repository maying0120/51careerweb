<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\job\Industry;


class IndustryController extends Controller
{
    public function index() {
        $industries = Industry::all();
        return view('admin/industry/show', compact('industries'));
    }

    public function edit($industryid) {
        $temp = Industry::find($industryid);
        return view('admin/industry/edit', ['industry' => $temp]);
    }

    public function add(Request $request) {
        if ($request->input('id') != null){
            $temp = Industry::find($request->input('id'));
            $temp->fill($request->all());
            $temp->save();
        }
        else {
            $temp = new Industry();
            $temp->fill($request->all());
            $temp->save();
        }

        return redirect()->route('industry_view');
    }

    public function delete($industryid) {
        $temp = Industry::find($industryid)->delete();
        
        return redirect()->route('industry_view');
    }

    public function create(){
        return view('/admin/industry/industry');
    }

}