<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home1');
    }


    public function home1()
    {
      return view('home1');
    }



    public function aboutus()
    {
      return view('aboutus');
    }


    public function contactus()
      {
        return view('contactus');
     }


     public function ourstory()
     {
       return view('ourstory');
     }

     public function joinus()
     {
       return view('joinus');
     }
     public function ourservice()
     {
       return view('ourservice');
     }

     public function jobtest()
     {
       return view('jobtest');
     }

     public function jobreq()
     {
       return view('jobreq');
     }



}
