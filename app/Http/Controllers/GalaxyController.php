<?php

namespace App\Http\Controllers;

use App\Models\Galaxy;
use Illuminate\Http\Request;

class GalaxyController extends Controller
{
    public function index(){

        $galaxies= Galaxy::all();
        return view('galaxies.index', compact('galaxies'));
    }
}
