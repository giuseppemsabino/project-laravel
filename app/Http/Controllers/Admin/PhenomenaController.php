<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phenomenon;
use Illuminate\Http\Request;

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

        $newPhenomenon = new Phenomenon();

        
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
