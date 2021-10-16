<?php

namespace App\Http\Controllers;

use App\BiomedicalEquipment;
use App\EquipmentRoomRequired;
use App\HospitalRoom;
use App\Http\Requests\RuleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('teacher'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        $hospitalRooms = HospitalRoom::all();
        foreach ($hospitalRooms as $hr) {
            $dt = Carbon::parse($hr->created_at);
            $hr->created = $dt->toDateTimeString();
        }
        return view('elements.rules.index', compact('hospitalRooms'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($hospital_room_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $biomedicalEquipments = BiomedicalEquipment::all();
        return view('elements.rules.create')->with('biomedicalEquipments',$biomedicalEquipments)->with('hospital_room_id',$hospital_room_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuleRequest $request)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $rule = EquipmentRoomRequired::where('biomedical_equipment_id',$request->biomedical_equipment_id)->where('hospital_room_id',$request->hospital_room_id)->first();
        if ($rule)
            return redirect()->back()->with('message_error', 'Ya existe una regla asignada a ese Equipo Biomédico');

        $rule = new EquipmentRoomRequired();
        $rule->hospital_room_id = $request->hospital_room_id;
        $rule->biomedical_equipment_id = $request->biomedical_equipment_id;
        $rule->required = $request->required;
        $rule->feedback = $request->feedback;

        if($rule->save()) {
            return redirect()->route('rules.index')->with('message', 'La regla fue creada exitosamente');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($hospitalRoom_id)
    {
        $hospitalRoom = HospitalRoom::find($hospitalRoom_id);
        if($hospitalRoom){
            $rules = $hospitalRoom->biomedicalEquipments;
            foreach ($rules as $rule) {
                $dt = Carbon::parse($rule->created_at);
                $rule->created = $dt->format('d/m/Y');
            }
            return view('elements.rules.show')->with('rules',$rules)->with('hospitalRoom',$hospitalRoom);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($hospital_room_id, $rule_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $rule = EquipmentRoomRequired::find($rule_id);
        if (!$rule) {
            return redirect()->back()->with('message_error', 'La regla indicada no existe');
        }
        $biomedicalEquipments = BiomedicalEquipment::all();
        return view('elements.rules.edit')->with('biomedicalEquipments',$biomedicalEquipments)->with('hospital_room_id',$hospital_room_id)->with('rule',$rule);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RuleRequest $request, $rule_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $rule = EquipmentRoomRequired::find($rule_id);
        if (!$rule)
            return redirect()->back()->with('message_error', 'La regla que desea modificar no existe');

        $rule->hospital_room_id = $request->hospital_room_id;
        $rule->biomedical_equipment_id = $request->biomedical_equipment_id;
        $rule->required = $request->required;
        $rule->feedback = $request->feedback;

        if($rule->save()) {
            return redirect()->route('rules.index')->with('message', 'La regla fue modificada exitosamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rule_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
                
        $rule = EquipmentRoomRequired::find($rule_id);
        if($rule->delete()) {
            return redirect()->route('rules.index')->with('message', 'La regla: '.$rule->id.' fue eliminada con Exito!');
        }
    }
}
