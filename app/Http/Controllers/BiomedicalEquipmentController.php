<?php

namespace App\Http\Controllers;

use App\BiomedicalEquipment;
use App\BiomedicalEquipmentCategory;
use App\Http\Requests\BiomedicalEquipmentRequest;
use App\RiskFactor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BiomedicalEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biomedialEquipments = BiomedicalEquipment::all();
        foreach ($biomedialEquipments as $equipment) {
            $dt = Carbon::parse($equipment->created_at);
            $equipment->created = $dt->toDateTimeString();
        }
        return view("elements.biomedical-equipments.index", compact("biomedialEquipments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');

        $riskFactors = RiskFactor::all();
        $categories = BiomedicalEquipmentCategory::all();
        return view("elements.biomedical-equipments.create", compact("riskFactors", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BiomedicalEquipmentRequest $request)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');

        $input = $request->all();
        $equipment = new BiomedicalEquipment();
        $equipment->fill($input);
        $equipment->image = "#";
        $equipment->maintenance_plan = $equipment->risk_factor_id ? true : false;
        $equipment->save();

        $route = "images/biomedical-equipments/$equipment->id";
        $file = $request->image;
        $path = Storage::disk('public')->putFileAs($route, $file, $file->getClientOriginalName());
        $equipment->image = "/storage/" . $path;
        $equipment->save();

        return redirect()->route('biomedical-equipments.index')->with('successMessage', 'Equipo creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BiomedicalEquipment  $biomedicalEquipment
     * @return \Illuminate\Http\Response
     */
    public function show(BiomedicalEquipment $biomedicalEquipment)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');

        return view("elements.biomedical-equipments.show", compact("biomedicalEquipment"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BiomedicalEquipment  $biomedicalEquipment
     * @return \Illuminate\Http\Response
     */
    public function edit(BiomedicalEquipment $biomedicalEquipment)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');

        $riskFactors = RiskFactor::all();
        $categories = BiomedicalEquipmentCategory::all();
        return view("elements.biomedical-equipments.edit", compact("riskFactors", "categories", "biomedicalEquipment"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BiomedicalEquipment  $biomedicalEquipment
     * @return \Illuminate\Http\Response
     */
    public function update(BiomedicalEquipmentRequest $request, BiomedicalEquipment $biomedicalEquipment)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');

        $biomedicalEquipment->fill($request->all());
        $biomedicalEquipment->maintenance_plan = $biomedicalEquipment->risk_factor_id ? true : false;
        $file = $request->image;
        if ($file) {
            $route = "images/biomedical-equipments/$biomedicalEquipment->id";
            $path = Storage::disk('public')->putFileAs($route, $file, $file->getClientOriginalName());
            $biomedicalEquipment->image = "/storage/" . $path;
        }
        $biomedicalEquipment->save();
        return redirect()->route('biomedical-equipments.index')->with('successMessage', 'Equipo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BiomedicalEquipment  $biomedicalEquipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(BiomedicalEquipment $biomedicalEquipment)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');
                
        $biomedicalEquipment->delete();
        return redirect()->route('biomedical-equipments.index')->with('successMessage', 'Equipo eliminado con éxito');
    }
}
