<?php

namespace App\Http\Controllers;

use App\Enrollment;
use App\Group;
use App\Http\Requests\GroupRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('teacher') && count(Group::where('assistant_teacher',$user->id)->get())==0)
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        if ($user->hasRole('teacher')) {
            $groups = Group::where('main_teacher',$user->id)->get();
        }else{
            if (count(Group::where('assistant_teacher',$user->id)->get())>0) {
                $groups =Group::where('assistant_teacher',$user->id)->get();

            }else{
                $groups = Group::all();
            }   
        }
        
        foreach ($groups as $gr) {
            $dt = Carbon::parse($gr->created_at);
            $gr->created = $dt->toDateTimeString();
        }
        // dd($groups->first()->main_teacher()->fullname);
        return view('elements.groups.index', compact('groups'));
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

        $teachers = User::whereHas("roles", function($q){ $q->where("name", "teacher"); })->get();
        $users = User::whereHas("roles", function($q){ $q->where('name','student')->orWhere('name', 'teacher'); })->get();
        return view('elements.groups.create')->with('teachers',$teachers)->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupRequest $request)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        if ($request->main_teacher == '-1')
            return redirect()->back()
                ->with('message_error', 'Por favor seleccione un docente!');
        
        $group = new Group();
        $group->name = $request->name;
        $group->code = $request->code;
        $group->main_teacher = $request->main_teacher;
        if ($request->assistant_teacher == '-1'||$request->assistant_teacher == '0')
            $group->assistant_teacher = null;
        else
            $group->assistant_teacher = $request->assistant_teacher;

        if($group->save()) {
            return redirect()->route('groups.index')->with('message', 'El grupo fue creado exitosamente');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('teacher') && count(Group::where('assistant_teacher',$user->id)->get())==0)
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        
        if($group){
            $students = User::whereHas("roles", function($q){ $q->where("name", "student"); })->get();
            $enrollments = Enrollment::where('group_id', $group->id)->get();
            return view('elements.groups.show')->with('enrollments',$enrollments)->with('students',$students)->with('group',$group);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $teachers = User::whereHas("roles", function($q){ $q->where("name", "teacher"); })->get();
        $users = User::whereHas("roles", function($q){ $q->where('name','student')->orWhere('name', 'teacher'); })->get();
        return view('elements.groups.edit')->with('teachers',$teachers)->with('users',$users)->with('group',$group);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(GroupRequest $request, Group $group)
    {

        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');

        $group->name = $request->name;
        $group->code = $request->code;
        $group->main_teacher = $request->main_teacher;
        if ($request->assistant_teacher == '-1'||$request->assistant_teacher == '0')
            $group->assistant_teacher = null;
        else
            $group->assistant_teacher = $request->assistant_teacher;

        if($group->save()) {
            return redirect()->route('groups.show',$group)->with('message', 'El grupo fue actualizado con éxito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
                
        // $group = EquipmentRoomRequired::find($group_id);
        if($group->delete()) {
            return redirect()->route('groups.index')->with('message', 'El grupo: '.$group->name.' fue eliminado con Exito!');
        }
    }
}
