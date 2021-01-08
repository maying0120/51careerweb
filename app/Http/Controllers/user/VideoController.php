<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\video;
use App\Model\user\vcategory;
//use App\Model\user\vtag;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{


    public function index(vcategory $vcategory = null)
    {
        $videos = video::latest()
           ->filter(request(['month','year']))
          ->paginate(6);

     //  $videos = video::where('status',1)->paginate(5);


        $archives =  video::selectRaw('year(created_At) year, monthname(created_at) month,count(*) published')
             ->groupBy('year','month')
             ->orderByRaw('min(created_at) desc')
             ->get()
             ->toArray();

        $vcategories = vcategory::all();

    	return view('user.video.video',compact('videos','archives','vcategories'));

    }


    public function searchbycat($vcategory){
      $videos = video::where('vcategory','like','%'.$vcategory.'%')->get();
      $archives =  video::selectRaw('year(created_At) year, monthname(created_at) month,count(*) published')
        ->groupBy('year','month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();

      $vcategories = vcategory::all();

      return view('user.video.video',compact('videos','archives','vcategories'));
    }


      public function vcategory(vcategory $vcategory)
      {
        # return $vcategory = vcategory::where('name',$name)->get();
         return $vcategory;
         #$posts = $category->posts();
         #$posts = $category->posts();
         #return view('user/post/post',compact('posts'));
      }


     public function catsearch(vcategory $vcategory = null)
     {
      $videos = $vcategory->videos;




       $archives =  video::selectRaw('year(created_At) year, monthname(created_at) month,count(*) published')
                 ->groupBy('year','month')
                 ->orderByRaw('min(created_at) desc')
                 ->get()
                 ->toArray();

        	return view('user.video.video',compact('videos','archives'));

     }




     public function search(Request $request)

     {
       $search = $request->get('search');
       $videos = video::where('title','like','%'.$search.'%')
       ->paginate(6);
       // ->get()
        //->toArray();

       //->paginate(4);

           $archives =  video::selectRaw('year(created_At) year, monthname(created_at) month,count(*) published')
           ->groupBy('year','month')
           ->orderByRaw('min(created_at) desc')
           ->get()
           ->toArray();

       return view('user.video.video',compact('videos','archives'));

     }

  }
