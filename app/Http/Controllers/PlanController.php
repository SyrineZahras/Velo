<?php

namespace App\Http\Controllers;
use App\Models\Plan;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    /** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function index() {
    $data = Plan::latest()->paginate(10);
    
    return view('backend.plan.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
}

/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function create() {
    return view('backend.plan.create');
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
            'time'  =>  'required',
            'description'      =>  'required',
            'ride_id'      =>  'required',
        ]);


        $ride = new Plan;

        $ride->time = $request->time;
        $ride->description = $request->description;
        $ride->ride_id = $request->ride_id;

        $ride->save();

        return redirect()->route('plans.index')->with('success', 'Plan have been added successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $ride
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        return view('backend.plan.edit', compact('plan'));
    }

   

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ride  $association
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'time'  =>  'required',
            'description'      =>  'required',
            'ride_id'      =>  'required',
        ]);

        $plan = Plan::find($request->hidden_id);

        $plan->time = $request->time;

        $plan->description = $request->description;

        $plan->ride_id = $request->ride_id;

        $plan->save();

        return redirect()->route('plans.index')->with('success', 'Plan data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plans.index')->with('success', 'Plan has been deleted successfully');
    }


/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function show(Plan $plan) {
    return view('backend.plan.show', compact('plan'));
}

/** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function plan() {
    $data = Plan::latest()->paginate(3);
    return view('frontend.plan', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
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
