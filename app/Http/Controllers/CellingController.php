<?php

namespace App\Http\Controllers;

use App\Celling;
use App\Http\Requests\CellingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');
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
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');
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
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');
        $celling = new Celling();
        $celling->name  = $request->name;
        $celling->description= $request->description;
        // $celling->enviroment_id = $request->enviroment_id;
        
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/elements/cellings/'), $file);
            $celling->image = 'img/elements/cellings/'.$file;
        }
        if($celling->save()) {
            return redirect()->route('celling.index')->with('message', 'El techo: '.$celling->name.' fue creado con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($celling_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');
        $celling = Celling::find($celling_id);
        if($celling){
            return view('elements.celling.show')->with('celling',$celling);
        }else{
            return redirect()->route('celling.index')->with('message_error', 'Techo no encontrado');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($celling_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');
        $celling = Celling::find($celling_id);
        if($celling){
            return view('elements.celling.edit')->with('celling',$celling);
        }else{
            return redirect()->route('celling.index')->with('message_error', 'Techo no encontrado');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CellingRequest $request, $celling_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');
        
        $celling = Celling::find($celling_id);
        $celling->name  = $request->name;
        $celling->description= $request->description;
        
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/elements/cellings/'), $file);
            $celling->image = 'img/elements/cellings/'.$file;
        }
        if($celling->save()) {
            return redirect()->route('celling.index')->with('message', 'El techo: '.$celling->name.' fue modificado con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($celling_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');
                
        $celling = Celling::find($celling_id);
        if($celling->delete()) {
            return redirect()->route('celling.index')->with('message', 'El techo: '.$celling->name.' fue eliminado con Exito!');
        }
    }
}
