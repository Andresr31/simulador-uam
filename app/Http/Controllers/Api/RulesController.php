<?php

namespace App\Http\Controllers\Api;

use App\BiomedicalEquipment;
use App\HospitalRoom;
use App\Http\Controllers\Controller;
use App\RiskFactor;
use App\Rule;
use App\User;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    public function getRules($room_id)
    {
        $room = HospitalRoom::find($room_id);

        if ($room) {
            $rule = new Rule();
            $band = false;
            if ($room->mesh) {
                $band = true;
            }
            $rule->pre = array("floor" => $room->floor->id, "wall" => $room->wall->id, "celling" => $room->floor->id, "mesh" => $band);

            foreach ($room->biomedicalEquipments as $r) {
                $biomedicalEquipment = BiomedicalEquipment::find($r->biomedical_equipment_id);
                $risk_factor = RiskFactor::find($biomedicalEquipment->risk_factor_id);
                if ($risk_factor) {
                    $r->risk = $risk_factor->name;
                } else {
                    $r->risk = null;
                }
            }

            $rule->simulation = $room->biomedicalEquipments;

            return response()->json([
                'data' => $rule,
                'res' => true,
                'message' => 'success'
            ], 200);
        } else {
            return response()->json([
                'res' => false,
                'message' => 'Hospital room not found'
            ], 404);
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
