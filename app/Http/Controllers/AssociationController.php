<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Association::latest()->paginate(5);

        return view('backend.association.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.association.create');
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
            'name'          =>  'required',
            'localisation'          =>  'required',
            'description'          =>  'required',
            'responsable'         =>  'required',
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'g-recaptcha-response' => 'required|captcha'

        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $file_name);

        $association = new Association;

        $association->name = $request->name;
        $association->localisation = $request->localisation;
        $association->description = $request->description;
        $association->responsable = $request->responsable;
        $association->image = $file_name;

        $association->save();

        return redirect()->route('associations.index')->with('success', 'Association Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function show(Association $association)
    {
        return view('backend.association.show', compact('association'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function edit(Association $association)
    {
        return view('backend.association.edit', compact('association'));
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Association $association)
    {
        $request->validate([
            'name'      =>  'required',
            'image'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $image = $request->hidden_image;

        if($request->image != '')
        {
            $image = time() . '.' . request()->image->getClientOriginalExtension();

            request()->image->move(public_path('images'), $image);
        }

        $association = Association::find($request->hidden_id);

        $association->name = $request->name;

        $association->localisation = $request->localisation;

        $association->description = $request->description;

        $association->responsable = $request->responsable;

        $association->image = $image;

        $association->save();

        return redirect()->route('associations.index')->with('success', 'Association Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function destroy(Association $association)
    {
        $association->delete();

        return redirect()->route('associations.index')->with('success', 'Association Data deleted successfully');
    }

    /** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function association() {
    $data = Association::latest()->paginate(9);

    return view('frontend.association', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
}



    /** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function associationdetails() {
    $data = Association::latest()->paginate(9);

    return view('frontend.association-details', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
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