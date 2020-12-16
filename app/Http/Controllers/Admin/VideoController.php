<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\video;
use App\Model\user\vcategory;
//use App\Model\user\tag;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = video::all();
        return view('admin/video/show',compact('videos'));
         #return view('admin/post/show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $tags = tag::all();
        //$categories = category::all();
        $vcategories = vcategory::all();
        return view('admin/video/video',['vcategories' => $vcategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->all();

        $this->validate($request,[
        'title' => 'required',
        'subtitle' => 'required',
        'slug' => 'required',
        'body' => 'required',
         'image' => 'required',
         'vcategory'  => 'required',
        ]);

             if($request->hasFile('image')) {
                   # return $request->image->getClientOriginalName();
                   $imageName1 = $request->image->store('public/image');
             }


        $video = new video;
        $video->image = $imageName1;
        $video->title = $request->title;
        $video->subtitle = $request->subtitle;
        $video->slug = $request->slug;
        $video->body = $request->body;
        $video->vcategory = join(";", $request->vcategory);
        $video->status = $request->status;
        //先保存post才有id，才能保存tags 和 categories
        $video->save();
       // $post->tags()->sync($request->tags);
        //$post->categories()->sync($request->categories);

        return redirect(route('video.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video =  video::where('id',$id)->first();
        //  $tags = tag::all();
         // $categories = category::all();
         $video->vcategory = explode (";", $video->vcategory);
         $vcategories = vcategory::all();
         for ($i = 0; $i < count($vcategories); $i++){
             for ($y = 0; $y < count($video->vcategory); $y++){
                 if ($vcategories[$i]->name == $video->vcategory[$y]) {
                     $vcategories[$i]->match = true;
                 } 
             }
         }

        return view('admin/video/edit',compact('video','vcategories'));

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

          // return $request->all();

            $this->validate($request,[
             'title' => 'required',
             'subtitle' => 'required',
              'slug' => 'required',
              'body' => 'required',
              'image' => 'required',
              'vcategory'  => 'required'
               ]);

             if($request->hasFile('image')) {
                   // return $request->image->getClientOriginalName();
                  // $imageName = $request->image->store('public/image');
                  $imageName = $request->image->store('public');
             }


                $video = video::find($id);
                $video->image = $imageName;
                $video->title = $request->title;
                $video->subtitle = $request->subtitle;
                $video->slug = $request->slug;
                $video->body = $request->body;
                $video->vcategory = join(";", $request->vcategory);
                // $post->tags()->sync($request->tags);
               // $post->categories()->sync($request->categories);
                $video->status = $request->status;


                //新增
               // $visitCount = $request->visitCount;
               // $post->visit_count = $visitCount;

                $video->save();

                return redirect(route('video.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        video::where('id',$id)->delete();
        return redirect()->back();
    }
}
