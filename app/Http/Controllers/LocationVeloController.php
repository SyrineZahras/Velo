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
        return view('backend.location.index',compact("locationvelos","user","bike"));
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
    public function edit(LocationVelo $location)
    {
       // return $location;
        return view('backend.location.edit', compact('location'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocationVelo  $locationVelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocationVelo $location)
    {
        $request->validate([
            "username"  =>  'required',
            "usermail" =>  'required',
            "userphone" =>  'required',
            "duration" =>  'required',

        ]);

        $location = LocationVelo::find($request->hidden_id);

        $location->username = $request->username;

        $location->usermail = $request->usermail;

        $location->userphone = $request->userphone;

        $location->duration = $request->duration;

        $location->save();

        return redirect()->route('locations.index')->with('success', 'Rent Velo data has been updated successfully');
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

    /** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function rent(Bike $bike ,User $user ) {
    return view('frontend.rentbike',compact("bike","user"));
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