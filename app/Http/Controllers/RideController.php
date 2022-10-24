<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use App\Models\Association;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RideController extends Controller
{

/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function index() {
    $data = Ride::latest()->paginate(7);
    
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function edit(Ride $ride)
    {
        return view('backend.ride.edit', compact('ride'));
    }

/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function show(Ride $ride) {
    $association = Association::find($ride->association_id);
    $plan = Plan::find($ride->id);

    return view('backend.ride.show', compact('ride', 'association','plan'));
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
            'time'      =>  'required',
            'distance'  =>  'required',
            'duration'  =>  'required',
            'lng'       =>  'required',
            'lat'       =>  'required',
            'association_id' => ['required', Rule::exists('associations', 'id')]
        ]);


        $ride = new Ride;

        $ride->location = $request->location;
        $ride->date = $request->date;
        $ride->time = $request->time;
        $ride->distance = $request->distance;
        $ride->duration = $request->duration;
        $ride->lng = $request->lng;
        $ride->lat = $request->lat;
        $ride->association_id = $request->association_id;

        $ride->save();

        return redirect()->route('rides.index')->with('success', 'Ride have been added successfully.');
    }

   
 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ride  $association
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ride $ride)
    {
        $request->validate([
            'location'  =>  'required',
            'date'      =>  'required',
            'time'      =>  'required',
            'distance'  =>  'required',
            'duration'  =>  'required',
            'lng'       =>  'required',
            'lat'       =>  'required',
            'status'    =>  'required'

        ]);

        $ride = Ride::find($request->hidden_id);

        $ride->location = $request->location;

        $ride->date = $request->date;

        $ride->time = $request->time;

        $ride->distance = $request->distance;

        $ride->duration = $request->duration;

        $ride->lng = $request->lng;

        $ride->lat = $request->lat;

        $ride->status = $request->status;

        $ride->save();

        return redirect()->route('rides.index')->with('success', 'Ride data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ride $ride)
    {
        $ride->delete();

        return redirect()->route('rides.index')->with('success', 'Ride has been deleted successfully');
    }


/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function ride() {
    $data = Ride::latest()->paginate(3);
    return view('frontend.ride', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
}

 /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        // ...
    }
}
