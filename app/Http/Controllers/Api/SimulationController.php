<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimulationController extends Controller
{
    public function registerScore(Request $request){
        
        return response()->json([
            'data'=> json_encode($request->all()),
            'res'=>true,
            'message'=>'Hola mundo te saludo desde laravel'
        ],200); 
        

    }
}
