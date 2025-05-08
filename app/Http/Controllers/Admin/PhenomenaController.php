<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phenomenon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhenomenaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phenomena = Phenomenon::all();
        return view('phenomena.indexPhen', compact('phenomena'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phenomena.createPhen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $newPhenomenon = new Phenomenon();

        $newPhenomenon->name = $data['name'];
        $newPhenomenon->description = $data['description'];

        if(array_key_exists('image', $data)){
            $image_url = Storage::putFile("phenomena", $data['image']);

            $newPhenomenon->image = $image_url;
        }

        // dd($data);
        $newPhenomenon->save();

        return redirect()->route('phenomena.show', $newPhenomenon);
    }

    /**
     * Display the specified resource.
     */
    public function show(Phenomenon $phenomenon)
    {
        return view('phenomena.showPhen', compact('phenomenon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phenomenon $phenomenon)
    {
        return view('phenomena.editPhen', compact('phenomenon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phenomenon $phenomenon)
    {
        $data = $request->all();

        $phenomenon->name = $data['name'];
        $phenomenon->description = $data['description'];

        if(array_key_exists('image',$data)){
            if($phenomenon->image !== null){

                Storage::delete($phenomenon->image);

            }

            $image_url = Storage::putFile('phenomena', $data['image']);

            $phenomenon->image = $image_url;
        }

        $phenomenon->update();

        return redirect()->route('phenomena.show', compact('phenomenon'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phenomenon $phenomenon)
    {
        if (!empty($phenomenon->image)) {
            Storage::delete($phenomenon->image);
        }

        $phenomenon->delete();

        return redirect()->route('phenomena.index');
    }
}
