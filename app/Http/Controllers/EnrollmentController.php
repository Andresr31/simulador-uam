<?php

namespace App\Http\Controllers;

use App\Enrollment;
use App\Group;
use App\Http\Requests\EnrollmentRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // No aplica
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($group_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $students = User::whereHas("roles", function($q){ $q->where("name", "student"); })->get();
        $group = Group::find($group_id);

        // return view('elements.enrollments.create')->with('biomedicalEquipments',$biomedicalEquipments)->with('hospital_room_id',$hospital_room_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnrollmentRequest $request)
    {
        // dd($request->all());
        if ($request->student_id == -1) {
            return redirect()->back()
                ->with('message_error', 'Por favor ingrese un estudiante');
        }
        $group = Group::find($request->group_id);
        $user = Auth::user();
        if (!$user->hasRole('admin') && $user->id != $group->main_teacher)
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        if (count(Enrollment::where('student_id',$request->student_id)->get())==0) {
            $enrollment = new Enrollment();
            $enrollment->student_id = $request->student_id;
            $enrollment->group_id = $request->group_id;

            if($enrollment->save()) {
                return redirect()->back()->with('message', 'Usuario inscrito exitosamente');
            }
        }else{
            return redirect()->back()
                ->with('message_error', 'El estudiante que desea inscribir ya se encuentra registrado en un grupo');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollment $enrollment)
    {
        $user = User::find($enrollment->student_id);
        return redirect()->route('users.show',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollment $enrollment)
    {
        $group = Group::find($enrollment->group_id);
        $user = Auth::user();
        if (!$user->hasRole('admin') && $user->id != $group->main_teacher)
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
                
        if($enrollment->delete()) {
            return redirect()->route('groups.show',$group)->with('message', 'El estudiante ha sido eliminado del grupo: '.$group->name);
        }
    }
}
