<?php

namespace App\Http\Controllers;

use App\BiomedicalEquipmentCategory;
use App\Http\Requests\BiomedicalEquipmentCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiomedicalEquipmentCategoryController extends Controller
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
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        $categories = BiomedicalEquipmentCategory::paginate(10);
        return view('elements.biomedicalEquipmentCategory.index')->with('categories', $categories);
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
        return view('elements.biomedicalEquipmentCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BiomedicalEquipmentCategoryRequest $request)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        
        $category = new BiomedicalEquipmentCategory();
        $category->name  = $request->name;
        $category->description= $request->description;
        
        // if ($request->hasFile('image')) {
        //     $file = time().'.'.$request->image->extension();
        //     $request->image->move(public_path('imgs'), $file);
        //     $category->image = 'imgs/'.$file;
        // }
        if($category->save()) {
            return redirect()->route('biomedical-equipments-category.index')->with('message', 'La Categoria: '.$category->name.' fue Adicionado con Exito!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        $category = BiomedicalEquipmentCategory::find($category_id);
        if($category){
            return view('elements.biomedicalEquipmentCategory.show')->with('category',$category);
        }else{
            return redirect()->route('biomedical-equipments-category.index')->with('message_error', 'Categoría no encontrada');
        }
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        $category = BiomedicalEquipmentCategory::find($category_id);
        if($category){
            return view('elements.biomedicalEquipmentCategory.edit')->with('category',$category);  
        }else{
            return redirect()->route('biomedical-equipments-category.index')->with('message_error', 'Categoría no encontrada');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BiomedicalEquipmentCategoryRequest $request, $category_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        $category = BiomedicalEquipmentCategory::find($category_id);
        $category->name  = $request->name;
        $category->description= $request->description;
        
        // if ($request->hasFile('image')) {
        //     $file = time().'.'.$request->image->extension();
        //     $request->image->move(public_path('imgs'), $file);
        //     $category->image = 'imgs/'.$file;
        // }
        if($category->save()) {
            return redirect()->route('biomedical-equipments-category.index')->with('message', 'La Categoria: '.$category->name.' fue actualizada con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin'))
            return redirect()->route('home')
                ->with('error', '¡No tienes permiso para acceder a este recurso!');
        $category = BiomedicalEquipmentCategory::find($category_id);
        if($category->delete()) {
            return redirect()->route('biomedical-equipments-category.index')->with('message', 'La Categoria: '.$category->name.' fue eliminada con Exito!');
        }
    }
}
