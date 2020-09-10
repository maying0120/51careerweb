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
}
