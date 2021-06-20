<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudyCardRequest;
use App\StudyCard;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudyCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studyCards = StudyCard::all();
        foreach ($studyCards as $studyCard) {
            $dt = Carbon::parse($studyCard->created_at);
            $studyCard->created = $dt->toDateTimeString();
        }
        return view('elements.study-card.index', compact('studyCards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('teacher'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        return view('elements.study-card.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudyCardRequest $request)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('teacher'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $input = $request->all();
        $studyCard = new StudyCard();
        $studyCard->fill($input);
        $studyCard->save();

        $route = "images/studyCards/$studyCard->id";
        $file = $request->image;
        $path = Storage::disk('public')->putFileAs($route, $file, $file->getClientOriginalName());
        $studyCard->image = "/storage/" . $path;
        $studyCard->save();


        return redirect()->route('studyCards.index')->with('message', 'Tarjeta de estudio creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudyCard  $studyCard
     * @return \Illuminate\Http\Response
     */
    public function show(StudyCard $studyCard)
    {
        return view("elements.study-card.show", compact("studyCard"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudyCard  $studyCard
     * @return \Illuminate\Http\Response
     */
    public function edit(StudyCard $studyCard)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('teacher'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        return view('elements.study-card.edit', compact("studyCard"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudyCard  $studyCard
     * @return \Illuminate\Http\Response
     */
    public function update(StudyCardRequest $request, StudyCard $studyCard)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('teacher'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $input = $request->all();
        $studyCard->fill($input);
        $file = $request->image;
        if ($file) {
            $route = "images/studyCards/$studyCard->id";
            $path = Storage::disk('public')->putFileAs($route, $file, $file->getClientOriginalName());
            $studyCard->image = "/storage/" . $path;
        }
        $studyCard->save();

        return redirect()->route('studyCards.index')->with('message', 'Tarjeta de estudio actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudyCard  $studyCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudyCard $studyCard)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('teacher'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        
        $studyCard->delete();
        return redirect()->route('studyCards.index')->with('message', 'Tarjeta de estudio eliminada con éxito');
    }
}
