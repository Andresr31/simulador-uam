<?php

namespace App\Http\Controllers;

use App\BiomedicalEquipment;
use App\Simulation;
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
            $equipment = BiomedicalEquipment::find($resp->biomedical_equipment_id);
            if($equipment->equipmentRoom->required == "TRUE" && $resp->required == "false"){
                $missingItems[] = $equipment;
            }
            if($equipment->equipmentRoom->required == "FALSE" && $resp->required == "true"){
                $leftoverItems[] = $equipment;
            }
            // $failedItems[] = $equipment; // aquí hacer la validaciónde si se respondio conrrecto
        }
        $simulation->missingItems = $missingItems;
        $simulation->leftoverItems = $leftoverItems;
        $simulation->failedItems = $failedItems;
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
    public function destroy($id)
    {
        //
    }
}