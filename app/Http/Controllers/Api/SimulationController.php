<?php

namespace App\Http\Controllers\Api;

use App\Celling;
use App\Floor;
use App\Http\Controllers\Controller;
use App\Wall;
use Illuminate\Http\Request;

class SimulationController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    public function registerScore(Request $request)
    {
        return response()->json([
            'data' => $request->all(),
            'res' => true,
            'message' => 'Hola mundo te saludo desde laravel'
        ], 200);
    }

    public function getPre()
    {
        $floors = Floor::all();
        $walls = Wall::all();
        $cellings = Celling::all();

        $pre = array("floors" => $floors, "walls" => $walls, "cellings" => $cellings);

        return response()->json([
            'data' => $pre,
            'res' => true,
            'message' => 'success'
        ], 200);
    }
}
