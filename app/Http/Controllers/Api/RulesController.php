<?php

namespace App\Http\Controllers\Api;

use App\HospitalRoom;
use App\Http\Controllers\Controller;
use App\Rule;
use App\User;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function getRules($room_id){
        
        $room = HospitalRoom::find($room_id);
        if($room){
            $test = new Rule();
            $band = false;
            if($room->mesh){
                $band = true;
            }
            $test->pre = array("floor"=>$room->floor->id,"wall"=>$room->wall->id,"celling"=>$room->floor->id,"mesh"=>$band);
            $test->simulation = array("1"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"], "2"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"], "3"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"], "4"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"], "5"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"], "6"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"], "7"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"], "8"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"], "9"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"10"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"11"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"12"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"13"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"14"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"15"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"16"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"17"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"18"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"19"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"20"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"21"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"22"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"23"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"24"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"25"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"26"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"27"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"28"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"29"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"30"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"31"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"32"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"33"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"34"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"35"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"36"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"37"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"38"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"39"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"40"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"41"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"42"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"43"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"44"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"45"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"46"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"47"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"48"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"49"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"],"50"=>["required"=>"TRUE", "feedback"=>"Se equivocó paila","risk"=>"IA"]);
            return response()->json([
                'data'=> $test,
                'res'=>true,
                'message'=>'succes'
            ],200);
        }else{
            return response()->json([
                'res'=>false,
                'message'=>'Hospital room not found'
            ],404);
        }
         
        

    }

    // public function getRules($room_id){
        
    //     $test = new Rule();
        
    //     $test->pre = array("floor"=>1,"wall"=>1,"celling"=>1,"mesh"=>true);
    //     $test->simulation = array("1"=>0, "2"=>0, "3"=>0, "4"=>0, "5"=>0, "6"=>1, "7"=>1, "8"=>2, "9"=>0,"10"=>1,"11"=>1,"12"=>2,"13"=>0,"14"=>0,"15"=>0,"16"=>1,"17"=>0,"18"=>0,"19"=>1,"20"=>1,"21"=>1,"22"=>0,"23"=>0,"24"=>1,"25"=>2,"26"=>0,"27"=>0,"28"=>0,"29"=>0,"30"=>0,"31"=>0,"32"=>1,"33"=>1,"34"=>0,"35"=>0,"36"=>1,"37"=>0,"38"=>1,"39"=>0,"40"=>0,"41"=>0,"42"=>0,"43"=>0,"44"=>0,"45"=>0,"46"=>1,"47"=>1,"48"=>0,"49"=>1,"50"=>2);
    //     $test->pos = "Aún no disponible";

    //     // return response()->json(json_encode($test));


    //     return response()->json([
    //         'data'=> $test,
    //         'res'=>true,
    //         'message'=>'Hola mundo te saludo desde laravel'
    //     ],200); 
        

    // }
}
