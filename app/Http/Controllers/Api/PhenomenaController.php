<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Phenomenon;
use Illuminate\Http\Request;

class PhenomenaController extends Controller
{
    public function index(){
        $phenomena = Phenomenon::all();

        return response()->json([
            'success' => true,
            'data' => $phenomena
        ]);
    }
}
