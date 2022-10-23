<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::all();

        return view('backend.velo.index',compact("bikes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.velo.index');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $this->validate($request, [
        //     'image'     => 'required|image|mimes:png,jpg,jpeg',
        // ]);

        //upload image
        $imageUrl = $request->file('imageUrl');
        $imageUrl->storeAs('public/veloImg', $imageUrl->hashName());

        $bike = Bike::create([
            'imageUrl'     => $imageUrl->hashName(),
            'marque'     => $request->marque,
            'vitesse'     => $request->vitesse,
            'type'     => $request->type,
            'etat'     => $request->etat,
            'couleur'     => $request->couleur,
            'taille'     => $request->taille,
            'prix'     => $request->prix,
            'quantite'     => $request->quantite,


        ]);

        if($bike){
            //redirect dengan pesan sukses
            return redirect()->route('bikes.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('bikes.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        
        $bike = Bike::findOrFail($bike->id);
        $b=$bike->imageUrl;
        if($request->file('imageUrl') == "") {

            $bike->update([
                'marque'     => $request->marque,
            'vitesse'     => $request->vitesse,
            'type'     => $request->type,
            'etat'     => $request->etat,
            'couleur'     => $request->couleur,
            'taille'     => $request->taille,
            'prix'     => $request->prix,
            'quantite'     => $request->quantite,
            ]);

        } else {
            error_log('PAATH****');
            error_log($b);

            //hapus old image
            Storage::disk('local')->delete('public/veloImg/'.$b);

            //upload new image
            $imageUrl = $request->file('imageUrl');
            $imageUrl->storeAs('public/veloImg', $imageUrl->hashName());

            $bike->update([
                'imageUrl'     => $imageUrl->hashName(),
                'marque'     => $request->marque,
                'vitesse'     => $request->vitesse,
                'type'     => $request->type,
                'etat'     => $request->etat,
                'couleur'     => $request->couleur,
                'taille'     => $request->taille,
                'prix'     => $request->prix,
                'quantite'     => $request->quantite,
            ]);
            
        }

        if($bike){
            //redirect dengan pesan sukses
            return redirect()->route('bikes.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('bikes.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bike = Bike::findOrFail($id);
        Storage::disk('local')->delete('public/veloImg/'.$bike->imageUrl);
        $bike->delete();

        if($bike){
            //redirect dengan pesan sukses
            return redirect()->route('bikes.index')->with(['success' => 'Supprimé avec succées!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('bikes.index')->with(['error' => 'Erreur']);
        }
    }    
}

