<?php

namespace App\Http\Controllers;

use App\Career;
use App\Http\Requests\UserRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
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
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');
        $users = User::role(['teacher', 'student'])->get();
        foreach ($users as $user) {
            $dt = Carbon::parse($user->created_at);
            $user->created = $dt->toDateTimeString();
        }
        return view('elements.users.index', compact('users'));
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
        $roles = Role::all()->reject(function ($value, $key) {
            if ($value->id == 1) return true;
            return false;
        });
        $careers = Career::all();
        return view('elements.users.create', compact("roles", "careers"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $input = $request->all();
        $user = new User();
        $user->fill($input);
        $user->save();
        $user->assignRole(Role::find($request->role)->name);

        return redirect()->route('users.index')->with('successMessage', 'Usuario creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $userCurrent = Auth::user();
        if (!$userCurrent->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');

        return view("elements.users.show", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $userCurrent = Auth::user();
        if (!$userCurrent->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');
        $roles = Role::all()->reject(function ($value, $key) {
            if ($value->id == 1) return true;
            return false;
        });
        $careers = Career::all();
        return view("elements.users.edit", compact("roles", "careers", "user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $userCurrent = Auth::user();
        if (!$userCurrent->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');

        $input = $request->all();
        $user->fill($input);
        $user->save();
        $user->removeRole($user->roles[0]->name);
        $user->assignRole(Role::find($request->role)->name);

        return redirect()->route('users.index')->with('successMessage', 'Usuario creado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $userCurrent = Auth::user();
        if (!$userCurrent->hasRole('admin'))
            return redirect()->route('home')
                ->with('errorMessage', '¡No tienes permiso para acceder a este recurso!');
        
        $user->delete();
        return redirect()->route('users.index')->with('successMessage', 'Usuario eliminado con éxito');
    }
}
