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
        $bikes = Bike::paginate(2);

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

        $request->validate([
            'marque'          =>  'required|alpha',
            'vitesse'          =>  'required|alpha',
            'type'          =>  'required',
            'etat'         =>  'required',
            'couleur'         =>  'required',
            'taille'         =>  'required',
            'prix'         =>  'required',
            'quantite'         =>  'required',
            'imageUrl'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

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
    
    /** 
 * 
 * 
 *  Display a listing of the resource.
 * @return \Illuminate\Http\Response
*/
public function bike() {
    $data = Bike::latest()->paginate(3);
    return view('frontend.bike', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
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