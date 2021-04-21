<?php

namespace App\Http\Controllers;

use App\Floor;
use App\Http\Requests\FloorRequest;
use Illuminate\Http\Request;

class FloorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floors = Floor::paginate(10);
        return view('elements.floor.index')->with('floors', $floors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('elements.floor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FloorRequest $request)
    {
        $floor = new Floor();
        $floor->name  = $request->name;
        $floor->description= $request->description;
        $floor->enviroment_id = $request->enviroment_id;
        
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/elements/floors/'), $file);
            $floor->image = 'img/elements/floors/'.$file;
        }
        if($floor->save()) {
            return redirect('floor.index')->with('message', 'El piso '.$floor->name.' fue creado con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Floor $floor)
    {
        return view('elements.floor.show')->with('floor',$floor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Floor $floor)
    {
        return view('elements.floor.show')->with('floor',$floor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FloorRequest $request, Floor $floor)
    {
        $floor->name  = $request->name;
        $floor->description= $request->description;
        $floor->enviroment_id = $request->enviroment_id;
        
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/elements/floors/'), $file);
            $floor->image = 'img/elements/floors/'.$file;
        }
        if($floor->save()) {
            return redirect('floor.index')->with('message', 'El piso '.$floor->name.' fue modificado con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Floor $floor)
    {
        if($floor->delete()) {
            return redirect()->route('floor.index')->with('message', 'El piso: '.$floor->name.' fue eliminado con Exito!');
        }
    }
}
