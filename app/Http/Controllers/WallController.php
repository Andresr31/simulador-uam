<?php

namespace App\Http\Controllers;

use App\Http\Requests\WallRequest;
use App\Wall;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WallController extends Controller
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
        $walls = Wall::all();
        foreach ($walls as $wall) {
            $dt = Carbon::parse($wall->created_at);
            $wall->created = $dt->toDateTimeString();
        }
        return view('elements.walls.index', compact('walls'));
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
        return view('elements.walls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WallRequest $request)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $input = $request->all();
        $wall = new Wall();
        $wall->fill($input);
        $wall->image = "#";
        $wall->save();

        $route = "images/walls/$wall->id";
        $file = $request->image;
        $path = Storage::disk('public')->putFileAs($route, $file, $file->getClientOriginalName());
        $wall->image = "/storage/" . $path;
        $wall->save();


        return redirect()->route('walls.index')->with('message', 'Pared creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wall  $wall
     * @return \Illuminate\Http\Response
     */
    public function show(Wall $wall)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        return view("elements.walls.show", compact("wall"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wall  $wall
     * @return \Illuminate\Http\Response
     */
    public function edit(Wall $wall)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        return view('elements.walls.edit', compact("wall"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wall  $wall
     * @return \Illuminate\Http\Response
     */
    public function update(WallRequest $request, Wall $wall)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $input = $request->all();
        $wall->fill($input);
        $file = $request->image;
        if ($file) {
            $route = "images/walls/$wall->id";
            $path = Storage::disk('public')->putFileAs($route, $file, $file->getClientOriginalName());
            $wall->image = "/storage/" . $path;
        }
        $wall->save();

        return redirect()->route('walls.index')->with('message', 'Pared actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wall  $wall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wall $wall)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        
        $wall->delete();
        return redirect()->route('walls.index')->with('message', 'Pared eliminada con éxito');
    }
}
