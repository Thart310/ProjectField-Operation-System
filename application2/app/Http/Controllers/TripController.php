<?php

namespace App\Http\Controllers;

use App\trip;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TripController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(){
        // $trips = trip::select('tripid')->get();
        $trips = trip::join('user', 'user.userid', '=', 'city.state_id')
        ->select('country.country_name', 'state.state_name', 'city.city_name')
        ->get();
      return view('home', compact('trips'));
       
        // $tripsname = trip::where('userid', '=', 1)->get(array('tripname'));
        // return view('home',compact('trips','tripsname') );
       
        }
 
}
