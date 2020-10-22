<?php

namespace App\Http\Controllers\location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\location\Country;
use App\Model\location\State;
use App\Model\location\City;

class LocationController extends Controller
{
    //

    public function getCountry(){
        $countries = Country::all();
        return response()->json($countries, 200);
    }

    public function getState(Request $request){
        $states = State::where('country_id' ,$request->input('id'))->get();
        return response()->json($states, 200);
    }

    public function getCity(Request $request){
        $cities = City::where('state_id' ,$request->input('id'))->get();
        return response()->json($cities, 200);

    }





}
