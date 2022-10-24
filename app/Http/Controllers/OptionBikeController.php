<?php

namespace App\Http\Controllers;

use App\Models\OptionBike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OptionBikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = OptionBike::paginate(2);

        return view('backend.optionvelo.index',compact("options"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageUrl = $request->file('imageUrl');
        $imageUrl->storeAs('public/veloImg', $imageUrl->hashName());
        
        $request->validate([
            'option'          =>  'required|alpha',
            'type'          =>  'required|alpha',
            'couleur'          =>  'required',
            'prix'         =>  'required',
            'imageUrl'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $option = OptionBike::create([
            'imageUrl'     => $imageUrl->hashName(),
            'option'     => $request->option,
            'type'     => $request->type,
            'couleur'     => $request->couleur,
            'prix'     => $request->prix,



        ]);

        if($option){
            //redirect dengan pesan sukses
            return redirect()->route('options.index')->with(['success' => 'Ajouté avec succées!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('options.index')->with(['error' => 'Erreur!']);
        }    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OptionBike  $optionBike
     * @return \Illuminate\Http\Response
     */
    public function show(OptionBike $optionBike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OptionBike  $optionBike
     * @return \Illuminate\Http\Response
     */
    public function edit(OptionBike $optionBike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OptionBike  $optionBike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OptionBike $option)
    {
        $option = OptionBike::findOrFail($option->id);
        $b=$option->imageUrl;
        if($request->file('imageUrl') == "") {

            $option->update([
                'option'     => $request->option,
                'type'     => $request->type,
                'couleur'     => $request->couleur,
                'prix'     => $request->prix,
            ]);

        } else {
            error_log('PAATH****');
            error_log($b);

            //hapus old image
            Storage::disk('local')->delete('public/veloImg/'.$b);

            //upload new image
            $imageUrl = $request->file('imageUrl');
            $imageUrl->storeAs('public/veloImg', $imageUrl->hashName());

            $option->update([
                'imageUrl'     => $imageUrl->hashName(),
                'option'     => $request->option,
                'type'     => $request->type,
                'couleur'     => $request->couleur,
                'prix'     => $request->prix,
            ]);
            
        }

        if($option){
            //redirect dengan pesan sukses
            return redirect()->route('options.index')->with(['success' => 'Modifier avec succées!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('options.index')->with(['error' => 'Erreur!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OptionBike  $optionBike
     * @return \Illuminate\Http\Response
     */
    public function destroy($optionBike)
    {
        $option = OptionBike::findOrFail($optionBike);
        Storage::disk('local')->delete('public/veloImg/'.$option->imageUrl);
        $option->delete();

        if($option){
            //redirect dengan pesan sukses
            return redirect()->route('options.index')->with(['success' => 'Supprimé avec succées!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('options.index')->with(['error' => 'Erreur']);
        }
    }
}