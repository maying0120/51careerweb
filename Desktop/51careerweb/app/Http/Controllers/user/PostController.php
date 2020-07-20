<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\category;
use App\Model\user\tag;



class PostController extends Controller
{

   public function index()
      {
      $posts = post::where('status',1)->paginate(4);
      return view('user/post/post',compact('posts'));
      }


     public function post(post $post)
     {
          #return $slug;
           #return view('home1');

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


  }
