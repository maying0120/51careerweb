<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\education;
use App\Model\user\user;

class EducationController extends Controller
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
    $education = new education();
    $user = auth()->user();

    $education->user = $user->id;
    $education->school = $request->schoolName;
    $education->degree = $request->degree;
    $education->major = $request->major;
    $education->start_date = $request->startDate;
    $education->end_date = $request->endDate;

    $education->save();

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
      $education = education::where('id',$id)->first();
      return view('user/profile/edit',compact('education'));
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
      $education = education::find($id);
      $education->school = $request->schoolName;
      $education->degree = $request->degree;
      $education->major = $request->major;
      $education->start_date = $request->startDate;
      $education->end_date = $request->endDate;
      $education->save();

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
      education::where('id',$id)->delete();
      return redirect()->back();
  }
}
