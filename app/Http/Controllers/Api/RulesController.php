<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function getRules($room_id){
        
        $data = User::all();
        return response()->json([
            'data'=> json_encode($data->all()),
            'res'=>true,
            'message'=>'Hola mundo te saludo desde laravel'
        ],200); 
        

    }
}
