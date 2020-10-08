<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\experience;
use App\Model\user\user;

class ExperienceController extends Controller
{
  public function index() {
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    $experience = new experience();
    $user = auth()->user();

    $experience->user = $user->id;
    if ($request->companyName) $experience->company = $request->companyName;
    if ($request->projectName) $experience->project = $request->projectName;
    $experience->title = $request->title;
    $experience->start_date = $request->startDate;
    $experience->end_date = $request->endDate;
    $experience->description = $request->description;

    $experience->save();

    return back();
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $experience = experience::where('id',$id)->first();
      if ($experience->company) $name = $experience->company;
      if ($experience->project) $name = $experience->project;
      return view('user/profile/experience',compact('experience', 'name'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $experience = experience::find($id);
      if ($experience->company) $experience->company = $request->companyName;
      if ($experience->project) $experience->project = $request->projectName;
      $experience->title = $request->title;
      $experience->start_date = $request->startDate;
      $experience->end_date = $request->endDate;
      $experience->description = $request->description;
      $experience->save();

      return redirect('profile');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      experience::where('id',$id)->delete();
      return redirect()->back();
  }
}
