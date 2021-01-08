<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\category;
use App\Model\user\tag;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

   public function index()
      {
     // $posts = post::where('status',1)->paginate(4);
      $posts = Post::latest()
      ->filter(request(['month','year']))
      ->paginate(4);

   /**   if ($month = request('month'))
      {
        $posts->whereMonth('created_at',Carbon::parse($month)->month );
      }

     if ($year = request('year'))
     {
         $posts->whereYear('created_at',$year );
     }

      // $posts = post::where('status',1)->paginate(4);
        $posts = $posts->paginate(4);
**/
      $archives =  Post::selectRaw('year(created_At) year, monthname(created_at) month,count(*) published')
        ->groupBy('year','month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();


      return view('user.post.post',compact('posts','archives'));
      }


     public function post(post $post)
     {
          #return $slug;
           #return view('home1');
        //新增
        $post->increment('visit_count');


          return view('user/post/postdetail',compact('post'));
     }

     public function tag()
     {
       # return $request->all();
     }

      public function category(category $category)
      {
         #return $category = category::where('slug',$slug)->get();
         return $category;
         #$posts = $category->posts();
         #$posts = $category->posts();
         #return view('user/post/post',compact('posts'));
      }


 public function search(Request $request)

 {
   $search = $request->get('search');
   $posts = post::where('title','like','%'.$search.'%')
   ->paginate(4);
   // ->get()
    //->toArray();

   //->paginate(4);


         $archives =  Post::selectRaw('year(created_At) year, monthname(created_at) month,count(*) published')
           ->groupBy('year','month')
           ->orderByRaw('min(created_at) desc')
           ->get()
           ->toArray();


   return view('user.post.post',compact('posts','archives'));

 }







  }
