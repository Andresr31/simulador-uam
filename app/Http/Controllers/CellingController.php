<?php

namespace App\Http\Controllers;

use App\Celling;
use App\Http\Requests\CellingRequest;
use Illuminate\Http\Request;

class CellingController extends Controller
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
        $cellings = Celling::paginate(10);
        return view('elements.celling.index')->with('cellings', $cellings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('elements.celling.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CellingRequest $request)
    {
        $celling = new Celling();
        $celling->name  = $request->name;
        $celling->description= $request->description;
        $celling->enviroment_id = $request->enviroment_id;
        
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/elements/cellings/'), $file);
            $celling->image = 'img/elements/cellings/'.$file;
        }
        if($celling->save()) {
            return redirect('celling.index')->with('message', 'El techo: '.$celling->name.' fue creado con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Celling $celling)
    {
        return view('elements.celling.show')->with('celling',$celling);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Celling $celling)
    {
        return view('elements.celling.edit')->with('celling',$celling);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CellingRequest $request, Celling $celling)
    {
        $celling->name  = $request->name;
        $celling->description= $request->description;
        
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/elements/cellings/'), $file);
            $celling->image = 'img/elements/cellings/'.$file;
        }
        if($celling->save()) {
            return redirect('celling.index')->with('message', 'El techo: '.$celling->name.' fue modificado con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Celling $celling)
    {
        if($celling->delete()) {
            return redirect()->route('celling.index')->with('message', 'El techo: '.$celling->name.' fue eliminado con Exito!');
        }
    }
}
