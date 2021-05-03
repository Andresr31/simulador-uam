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
        
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/elements/floors/'), $file);
            $floor->image = 'img/elements/floors/'.$file;
        }
        if($floor->save()) {
            return redirect()->route('floors.index')->with('message', 'El piso '.$floor->name.' fue creado con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($floor_id)
    {
        $floor = Floor::find($floor_id);
        if($floor){
            return view('elements.floor.show')->with('floor',$floor);
        }else{
            return redirect()->route('floors.index')->with('message_error', 'Techo no encontrado');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($floor_id)
    {
        $floor = Floor::find($floor_id);
        if($floor){
            return view('elements.floor.edit')->with('floor',$floor);
        }else{
            return redirect()->route('floors.index')->with('message_error', 'Techo no encontrado');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FloorRequest $request, $floor_id)
    {
        $floor = Floor::find($floor_id);
        $floor->name  = $request->name;
        $floor->description= $request->description;
        // $floor->enviroment_id = $request->enviroment_id;
        
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/elements/floors/'), $file);
            $floor->image = 'img/elements/floors/'.$file;
        }
        if($floor->save()) {
            return redirect()->route('floors.index')->with('message', 'El piso '.$floor->name.' fue modificado con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($floor_id)
    {
        $floor = Floor::find($floor_id);
        if($floor->delete()) {
            return redirect()->route('floors.index')->with('message', 'El piso: '.$floor->name.' fue eliminado con Exito!');
        }
    }
}
