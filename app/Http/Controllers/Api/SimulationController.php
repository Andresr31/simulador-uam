<?php

namespace App\Http\Controllers\Api;

use App\Celling;
use App\Floor;
use App\Http\Controllers\Controller;
use App\Report;
use App\Simulation;
use App\Wall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SimulationController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    public function registerScore(Request $request)
    {
        // get user that uses service
        $user = auth('api')->user();
        // get form data
        $data = json_decode($request->data);
        // save report
        $report = Report::create([
            'pre' => json_encode($data->pre),
            'simulation' => json_encode($data->simulation),
            'score_pre' => $data->scorePre,
            'score_simulation' => $data->scoreSimulation,
            'score_pos' => $data->scorePos,
            'score_total' => $data->scoreTotal
        ]);
        // save simulation
        $simulation = Simulation::create([
            'time' => $data->time,
            'numberAttempts' => $data->numberAttempts,
            'hopital_room_id' => $data->room_id,
            'user_id' => $user->id,
            'report_id' => $report->id,
        ]);
        // if send image file, save and update image field in simulation
        $file = $request->image;
        if ($file) {
            $route = "images/simulation/$simulation->id";
            $path = Storage::disk('public')->putFileAs($route, $file, $file->getClientOriginalName());
            $simulation->image = "/storage/" . $path;
            $simulation->save();
        }

        return response()->json([
            'data' => [
                "simulation" => $simulation,
                "report" => $report
            ],
            'res' => true,
            'message' => 'La simulación fue registrada exitosamente'
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

    public function test(Request $request)
    {
        return $request;
        // // get user that uses service
        // $user = auth('api')->user();
        // // get form data
        // $data = json_decode($request->data);
        // // save report
        // $report = Report::create([
        //     'pre' => json_encode($data->pre),
        //     'simulation' => json_encode($data->simulation),
        //     'score_pre' => $data->scorePre,
        //     'score_simulation' => $data->scoreSimulation,
        //     'score_pos' => $data->scorePos,
        //     'score_total' => $data->scoreTotal
        // ]);
        // // save simulation
        // $simulation = Simulation::create([
        //     'time' => $data->time,
        //     'numberAttempts' => $data->numberAttempts,
        //     'hopital_room_id' => $data->room_id,
        //     'user_id' => $user->id,
        //     'report_id' => $report->id,
        // ]);
        // // if send image file, save and update image field in simulation
        // $file = $request->image;
        // if ($file) {
        //     $route = "images/simulation/$simulation->id";
        //     $path = Storage::disk('public')->putFileAs($route, $file, $file->getClientOriginalName());
        //     $simulation->image = "/storage/" . $path;
        //     $simulation->save();
        // }
        // return response()->json([
        //     'data' => [
        //         "simulation" => $simulation,
        //         "report" => $report
        //     ],
        //     'res' => true,
        //     'message' => 'La simulación fue registrada exitosamente'
        // ], 200);
    }
}
