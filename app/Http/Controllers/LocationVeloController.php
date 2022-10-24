<?php

namespace App\Http\Controllers;

use App\Models\LocationVelo;
use Illuminate\Http\Request;
use App\Models\Bike;
use App\Models\User;

class LocationVeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locationvelos = LocationVelo::all();
        $bike = Bike::find(1);
        //$bike = Bike::where('id', 1);
        $user = User::find(1);
        return view('backend.locationVelo.index',compact("locationvelos","user","bike"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Bike $bike ,User $user )
    {
        return view('FrontEnd.locationvelo.Addlocation',compact("bike","user"));
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
            'username'  =>  'required',
            'usermail'      =>  'required',
            'userphone'    =>  'required',
            'duration'      =>  'required',
            'startDate'  =>  'required',
        ]);
        $location = LocationVelo::create([
            "username"  => $request->username,
            "usermail" => $request->usermail,
            "userphone" => $request->userphone,
            "startDate" => $request->startDate,
            "duration" => $request->duration,
            "user_id" => $request->userid,
            "bike_id" => $request->bikeid,
           
        ]);
        
        return redirect()->route('bill.store' , ['location' => $location->id]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocationVelo  $locationVelo
     * @return \Illuminate\Http\Response
     */
    public function show(LocationVelo $locationVelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocationVelo  $locationVelo
     * @return \Illuminate\Http\Response
     */
    public function edit(LocationVelo $locationVelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocationVelo  $locationVelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocationVelo $locationVelo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocationVelo  $locationVelo
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(LocationVelo $locationvelo)
    {
        
        $locationvelo->delete(); // Easy right?
        
        return back()->with('success', 'Location removed.');
    }
}
