<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galaxy;
use App\Models\Phenomenon;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalaxyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galaxies = Galaxy::all();
        return view('galaxies.index', compact('galaxies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $phenomena = Phenomenon::all();

        return view('galaxies.create', compact('types','phenomena'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // dd($data);

        $newGalaxy = new Galaxy();

        $newGalaxy->name = $data['name'];
        $newGalaxy->type_id = $data['type_id'];
        $newGalaxy->diameter = $data['diameter'];
        $newGalaxy->mass = $data['mass'];
        $newGalaxy->age = $data['age'];
        $newGalaxy->description = $data['description'];


        if(array_key_exists('image', $data)){
            $image_url = Storage::putFile("galaxies", $data['image']);

            $newGalaxy->image = $image_url;
        }

        // dd($data);
        $newGalaxy->save();

        if($request->has('phenomena')){
            $newGalaxy->phenomena()->attach($data['phenomena']);
        }

        return redirect()->route('galaxies.show', $newGalaxy);

    }

    /**
     * Display the specified resource.
     */
    public function show(Galaxy $galaxy)
    {
        return view('galaxies.show', compact('galaxy')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galaxy $galaxy)
    {
        $types = Type::all();
        $phenomena = Phenomenon::all();

        return view('galaxies.edit', compact('galaxy','types','phenomena'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galaxy $galaxy)
    {
        $data = $request->all();

        //modifico i valori della galssia
        $galaxy->name = $data['name'];
        $galaxy->type_id = $data['type_id'];
        $galaxy->diameter = $data['diameter'];
        $galaxy->mass = $data['mass'];
        $galaxy->age = $data['age'];
        $galaxy->description = $data['description'];

        if(array_key_exists('image',$data)){
            //elimina l'img precedente solo se c'è (questo lo controllo con un if)
            if($galaxy->image !== null){
                
                Storage::delete($galaxy->image);

            }

            //carico l'img nuova
            $file_url = Storage::putFile("galaxies", $data['image']);

            //aggionamento del db
            $galaxy->image = $file_url;
        }

        $galaxy->update();

        //verifico se ci sono fenomeni nella richiesta di update della galassia
        if($request->has('phenomena')){

            //sincronizzo la tabella con i nuovi fenomeni 
            $galaxy->phenomena()->sync($data['phenomena']);

        }else{
            //se solo stanno eliminando i fenomeni faccio un detach che elimina i dati degli id che non ci sono piu 
            $galaxy->phenomena()->detach();
        }

        // dd($galaxy);
        return redirect()->route('galaxies.show', compact('galaxy'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galaxy $galaxy)
    {
        // dd($galaxy);
        //se c'è una img 
        if (!empty($galaxy->image)) {
            Storage::delete($galaxy->image);
        }

        //elimino i fenomeni della tabella anche 
        $galaxy->phenomena()->detach();

        $galaxy->delete();

        return redirect()->route('galaxies.index');
    }
}
;