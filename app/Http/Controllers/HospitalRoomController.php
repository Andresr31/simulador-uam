<?php

namespace App\Http\Controllers;

use App\Celling;
use App\Floor;
use App\HospitalRoom;
use App\Http\Requests\HospitalRoomRequest;
use App\Wall;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HospitalRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        $hospitalRooms = HospitalRoom::all();
        foreach ($hospitalRooms as $hr) {
            $dt = Carbon::parse($hr->created_at);
            $hr->created = $dt->toDateTimeString();
        }
        return view('elements.hospital-rooms.index', compact('hospitalRooms'));
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
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        $floors = Floor::all();
        $cellings = Celling::all();
        $walls = Wall::all();
        return view('elements.hospital-rooms.create', compact('floors', 'cellings', 'walls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HospitalRoomRequest $request)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        
        $input = $request->all();
        $hospitalRoom = new HospitalRoom();
        $hospitalRoom->fill($input);
        $hospitalRoom->image = "#";
        $hospitalRoom->save();

        $route = "images/hospital-rooms/$hospitalRoom->id";
        $file = $request->image;
        $path = Storage::disk('public')->putFileAs($route, $file, $file->getClientOriginalName());
        $hospitalRoom->image = "/storage/" . $path;
        $hospitalRoom->save();

        return redirect()->route('hospital-rooms.index')->with('message', 'Ambiente creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HospitalRoom  $hospitalRoom
     * @return \Illuminate\Http\Response
     */
    public function show(HospitalRoom $hospitalRoom)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        return view("elements.hospital-rooms.show", compact("hospitalRoom"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HospitalRoom  $hospitalRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(HospitalRoom $hospitalRoom)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        $floors = Floor::all();
        $cellings = Celling::all();
        $walls = Wall::all();
        return view('elements.hospital-rooms.edit', compact('hospitalRoom', 'floors', 'cellings', 'walls'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HospitalRoom  $hospitalRoom
     * @return \Illuminate\Http\Response
     */
    public function update(HospitalRoomRequest $request, HospitalRoom $hospitalRoom)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $hospitalRoom->fill($request->all());
        $file = $request->image;
        if ($file) {
            $route = "images/hospital-rooms/$hospitalRoom->id";
            $path = Storage::disk('public')->putFileAs($route, $file, $file->getClientOriginalName());
            $hospitalRoom->image = "/storage/" . $path;
        }
        $hospitalRoom->save();
        return redirect()->route('hospital-rooms.index')->with('message', 'Equipo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HospitalRoom  $hospitalRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(HospitalRoom $hospitalRoom)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        
        $hospitalRoom->delete();
        return redirect()->route('hospital-rooms.index')->with('message', 'Ambiente hospitalario eliminado con éxito');
    }
}