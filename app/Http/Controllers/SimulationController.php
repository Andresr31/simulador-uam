<?php

namespace App\Http\Controllers;

use App\BiomedicalEquipment;
use App\HospitalRoom;
use App\RiskFactor;
use App\Simulation;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SimulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        if ($user->hasRole('admin')) $simulations = Simulation::all();
        else if ($user->hasRole('student')) $simulations = $user->simulations;

        foreach ($simulations as $simulation) {
            $dt = Carbon::parse($simulation->created_at);
            $simulation->created = $dt->toDateTimeString();
        }
        
        return view('elements.simulations.index', compact('simulations'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSimulations($user)
    {
        $auth = Auth::user();
        if (!$auth->hasRole('admin') && !$auth->hasRole('teacher'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        $user = User::find($user);
        $simulations = $user->simulations;
        // dd($simulations);
        foreach ($simulations as $simulation) {
            $dt = Carbon::parse($simulation->created_at);
            $simulation->created = $dt->toDateTimeString();
        }
        
        return view('elements.simulations.index', compact('simulations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Simulation $simulation)
    {
        $simulation->report->pre = json_decode($simulation->report->pre);
        $simulation->report->simulation = json_decode($simulation->report->simulation);
        
        $missingItems = []; //elemento que faltaron
        $leftoverItems = []; //elementos que sobrarion
        $failedItems = []; //elementos que fallaron
        foreach($simulation->report->simulation as $resp){
            // dd($simulation->report->simulation);
            $equipment = BiomedicalEquipment::find($resp->biomedical_equipment_id);
            if($equipment->equipmentRoom->required == "TRUE" && $resp->required == "false"){
                $missingItems[] = $equipment;
            }
            if($equipment->equipmentRoom->required == "FALSE" && $resp->required == "true"){
                $leftoverItems[] = $equipment;
            }
            $equipment->myRisk = RiskFactor::find($resp->risk);

            if($equipment->myRisk->id == $equipment->risk_factor_id){
                $equipment->response = true;
                $equipment->responseMessage = "Respuesta correcta";
            }else{
                $equipment->response = false;
                $equipment->responseMessage = "Respuesta incorrecta";
            }

            $failedItems[] = $equipment;
        }
        $simulation->missingItems = $missingItems;
        $simulation->leftoverItems = $leftoverItems;
        $simulation->failedItems = $failedItems;
        $simulation->user = User::find($simulation->user_id);
        $simulation->hospital_room = HospitalRoom::find($simulation->hopital_room_id);
        $simulation->score_pre = $simulation->report->score_pre;
        $simulation->score_simulation = $simulation->report->score_simulation;
        $simulation->score_pos = $simulation->report->score_pos;
        $simulation->score = $simulation->report->score_total;
        // dd($simulation);
        return view('elements.simulations.show', compact('simulation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Simulation $simulation)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('teacher'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        $report = $simulation->report;
        $simulation->delete();
        $report->delete();
        return redirect()->route('simulations.index')->with('message', 'Simulación eliminada con éxito');
    }
}
