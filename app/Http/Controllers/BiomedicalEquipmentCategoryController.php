<?php

namespace App\Http\Controllers;

use App\BiomedicalEquipmentCategory;
use App\Http\Requests\BiomedicalEquipmentCategoryRequest;
use Illuminate\Http\Request;

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
        $category = new BiomedicalEquipmentCategory();
        $category->name  = $request->name;
        $category->description= $request->description;
        
        // if ($request->hasFile('image')) {
        //     $file = time().'.'.$request->image->extension();
        //     $request->image->move(public_path('imgs'), $file);
        //     $category->image = 'imgs/'.$file;
        // }
        if($category->save()) {
            return redirect('categoryBE.index')->with('message', 'La Categoria: '.$category->name.' fue Adicionado con Exito!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BiomedicalEquipmentCategory $category)
    {
        return view('elements.biomedicalEquipmentCategory.show')->with('category',$category); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BiomedicalEquipmentCategory $category)
    {
        return view('elements.biomedicalEquipmentCategory.edit')->with('category',$category);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BiomedicalEquipmentCategoryRequest $request, BiomedicalEquipmentCategory $category)
    {
        $category->name  = $request->name;
        $category->description= $request->description;
        
        // if ($request->hasFile('image')) {
        //     $file = time().'.'.$request->image->extension();
        //     $request->image->move(public_path('imgs'), $file);
        //     $category->image = 'imgs/'.$file;
        // }
        if($category->save()) {
            return redirect('categoryBE.index')->with('message', 'La Categoria: '.$category->name.' fue Adicionado con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BiomedicalEquipmentCategory $category)
    {
        if($category->delete()) {
            return redirect()->route('categoryBE.index')->with('message', 'La Categoria: '.$category->name.' fue eliminada con Exito!');
        }
    }
}
