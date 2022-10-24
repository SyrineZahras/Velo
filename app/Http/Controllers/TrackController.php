<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use App\Models\Association;

use Illuminate\Http\Request;

class TrackController extends Controller
{

/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function index() {
    $data = Ride::latest()->paginate(5);
   // dd(Association::find($data[0]->association_id));
    return view('backend.ride.track', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);}

public function ajax(Request $request){
    $data = Ride::latest()->paginate(100);
	return response()->json($data);
	}

    public function ajaxid(Request $request){
        $rires = Ride::find($request->id);
        return response()->json($rires);
        }
}