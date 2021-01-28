<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;


class StateCityAPIController extends Controller
{
    public function getStateList()
    {
      $data = State::orderBy('title')->get();
      return response()->json($data);
    }
    public function getCityList(Request $request)
    {
      //return City::all();
      return City::where('state_id', '=', $request->state_id)->orderBy('title')->get();
    }
}
