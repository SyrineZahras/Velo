<?php

namespace App\Http\Controllers;
use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $evenements = Evenement::orderBy('id','desc')->paginate(5);
        return view('backend.evenement.index', compact('evenements'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('backend.evenement.create');
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
            'nameevent' => 'required',
            'themeevent' => 'required',
            'lieuevent' => 'required',
            'date' => 'required',
        ]);
        
        Evenement::create($request->post());

        return redirect()->route('evenements.index')->with('success','evenement has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Evenement  $evenement
    * @return \Illuminate\Http\Response
    */
    public function show(Evenement $evenement)
    {
        return view('evenements.show',compact('evenement'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Evenement  $evenement
    * @return \Illuminate\Http\Response
    */
    public function edit(Evenement $evenement)
    {
        return view('backend.evenement.edit',compact('evenement'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Evenement  $evenement
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request,Evenement $evenement)
    {
        $request->validate([
            'nameevent' => 'required|alpha',
            'themeevent' => 'required|alpha',
            'lieuevent' => 'required',
        ]);
        
        $evenement->fill($request->post())->save();

        return redirect()->route('evenements.index')->with('success','evenement Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Evenement $evenement
    * @return \Illuminate\Http\Response
    */
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();
        return redirect()->route('evenements.index')->with('success','evenement has been deleted successfully');
    }


         /** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function event() {
    $evenements = Evenement::orderBy('id','desc')->paginate(5);
    return view('frontend.event', compact('evenements'));
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