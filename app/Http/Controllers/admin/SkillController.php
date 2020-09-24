<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\job\Skill;


class SkillController extends Controller
{
    public function index() {
        $skills = Skill::all();
        return view('admin/skill/show', compact('skills'));
    }

    public function edit($skillid) {
        $temp = Skill::find($skillid);
        return view('admin/skill/edit', ['skill' => $temp]);
    }

    public function add(Request $request) {
        if ($request->input('id') != null){
            $temp = Skill::find($request->input('id'));
            $temp->fill($request->all());
            $temp->save();
        }
        else {
            $temp = new Skill();
            $temp->fill($request->all());
            $temp->save();
        }

        return redirect()->route('skill_view');
    }

    public function delete($skillid) {
        $temp = Skill::find($skillid)->delete();
        
        return redirect()->route('skill_view');
    }

    public function create(){
        return view('/admin/skill/skill');
    }

}