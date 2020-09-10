<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\showcase;
use App\Model\user\user;

class ShowcaseController extends Controller
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
    $showcase = new showcase();
    $user = auth()->user();

    $showcase->user = $user->id;
    $showcase->link = $request->link;
    $showcase->description = $request->description;

    $showcase->save();

    return back();
  }
}
