<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use Illuminate\Http\Request;

class RideController extends Controller
{

/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function index() {
    $data = Ride::latest()->paginate(10);
    
    return view('backend.ride.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
}

/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function create() {
    return view('backend.ride.create');
}


public function track($alias) {
    return view('backend.ride.track');
}

/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function edit() {
    return view('backend.ride.edit');
}

/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function show() {
    return view('backend.ride.show');
}

/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function view() {
    return view('backend.ride.index');
}



/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'location'  =>  'required',
            'date'      =>  'required',
            'status'    =>  'required',
            'time'      =>  'required',
            'distance'  =>  'required',
            'duration'  =>  'required',
            'lng'       =>  'required',
            'lat'       =>  'required'
        ]);


        $ride = new Ride;

        $ride->location = $request->location;
        $ride->date = $request->date;
        $ride->status = $request->status;
        $ride->time = $request->time;
        $ride->distance = $request->distance;
        $ride->duration = $request->duration;
        $ride->lng = $request->lng;
        $ride->lat = $request->lat;

        $ride->save();

        return redirect()->route('ride-records')->with('success', 'Ride have been added successfully.');
    }

}
