<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\vcategory;

class VCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      # return view('admin/category/category');
      $vcategories = vcategory::all();
      return view('admin/vcategory/show',compact('vcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/vcategory/vcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
         'name' => 'required',
         'slug' => 'required',
         ]);
         $vcategory = new vcategory;
         $vcategory->name = $request->name;
         $vcategory->slug = $request->slug;
         $vcategory->save();

         return redirect(route('vcategory.index'));
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
        $vcategory =  vcategory::where('id',$id)->first();
        return view('admin/vcategory/edit',compact('vcategory'));
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

          $this->validate($request,[
                  'name' => 'required',
                  'slug' => 'required',
                  ]);
          $vcategory = vcategory::find($id);
          $vcategory->name = $request->name;
          $vcategory->slug = $request->slug;
          $vcategory->save();

          return redirect(route('vcategory.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        vcategory::where('id',$id)->delete();
        return redirect()->back();
    }
}
