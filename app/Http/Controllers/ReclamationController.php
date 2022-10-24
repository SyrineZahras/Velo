<?php

namespace App\Http\Controllers;
use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $reclamations = Reclamation::orderBy('id','desc')->paginate(5);
        return view('backend.reclamation.index', compact('reclamations'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('backend.reclamation.create');
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
            'titrereclamation' => 'required|alpha',
            'nomevent' => 'required|alpha',
            'description' => 'required',
        ]);
        
        Reclamation::create($request->post());

        return redirect('user-claim')->with('success','Reclamation has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Reclamation  $reclamation
    * @return \Illuminate\Http\Response
    */
    public function show(Reclamation $reclamation)
    {
        return view('reclamations.show',compact('reclamation'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Reclamation  $reclamation
    * @return \Illuminate\Http\Response
    */
    public function edit(Reclamation $reclamation)
    {
        return view('backend.reclamation.edit',compact('reclamation'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Reclamation  $reclamation
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Reclamation $reclamation)
    {
        $request->validate([
            'titrereclamation' => 'required',
            'nomevent' => 'required',
            'description' => 'required',
        ]);
        
        $reclamation->fill($request->post())->save();

        return redirect()->route('reclamations.index')->with('success','Reclamation Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Reclamation  $reclamation
    * @return \Illuminate\Http\Response
    */
    public function destroy(Reclamation $reclamation)
    {
        $reclamation->delete();
        return redirect()->route('reclamations.index')->with('success','Reclamation has been deleted successfully');
    }


             /** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function claim() {
    return view('frontend.claim');
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