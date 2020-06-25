<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

   public function index()
      {
      return view('home1');
      #return view('post');
      }
  }
