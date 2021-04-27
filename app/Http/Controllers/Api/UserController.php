<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function login(Request $request){

        if($request->email){
            $user = User::where('email','=',$request->email)->first();
            if($user && Hash::check($request->password, $user->password)){
                
                $token = $user->createToken('simulador')->accessToken;

                return response()->json([
                    'res'=>true,
                    'token'=>$token,
                    'user'=>$user,
                    'message'=>'success'
                ],200);

            }else{
                return response()->json([
                    'res'=>false,
                    'message'=>'Wrong email or password'
                ],200); 
            }
        }else{
            return response()->json([
                'res'=>false,
                'message'=>'Wrong data'
            ],200); 
        }

    }

}
