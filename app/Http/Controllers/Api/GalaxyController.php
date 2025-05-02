<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Galaxy;
use Illuminate\Http\Request;

class GalaxyController extends Controller
{
    public function index(){
        $galaxies= Galaxy::with('Type')->get();

        return response()->json([
            'success' => true,
            'data' => $galaxies
        ]);
    }

    public function show(Galaxy $galaxy){

        $galaxy->load('type', 'phenomena');

        return response()->json([
            "success" => true,
            "data" => $galaxy
        ]);
    }
}
