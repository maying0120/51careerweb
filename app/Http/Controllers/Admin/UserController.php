<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\User;
use App\Model\user\Profile;
use App\Notifications\JobsRecommend;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin/user/user',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin/user/edit',compact('user'));
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
        $user = User::find($id);
        $user->status = $request->status;
        $user->save();

        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->back();
    }

    public function recommend($id){
        rec($id);
        return redirect(route('user.index'));
    }

    public function recommendall(){
        $users = user::all();
        $id = array();
        foreach ($users as $user) {
            array_push($id, $user->id);
        }

        for ($i = 0; $i < count($id); $i++){
            rec($id[$i]);
        }
        return redirect(route('user.index'));
    }


}

 function rec($id) {
    $time = time();
    $link = route('host').'/job/'.dechex($time).'-'.$id;
    $user = user::find($id);
    $user->recommend_job = $link;
    $user->save();
}
