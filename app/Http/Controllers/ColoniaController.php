<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colonia;
class ColoniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(Request $request)
    {
        //search es el nombre del navbar en app.blade
      $query= trim($request->get('search'));
      if ($request) {

        //busca usuario con like se dice que sea igual a lo que se escribe en el form ya sea al principio o al final
        $colonias= Colonia::where('Colonia', 'LIKE', '%'.$query.'%' )
        ->orderBy('Id_colonia', 'asc')
        ->get();

         return view('colonias', ['colonias' =>$colonias, 'search' => $query]);
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts/colonias/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datoscolonias=request()->except('_token');
        Colonia::insert($datoscolonias);
     
        return redirect('colonias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_colonia)
    {
       return view('layouts/Colonias/show', ['Colonias'=> Colonia::findOrFail($Id_colonia)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_colonia)
    {
        return view('layouts/Colonias/edit', ['Colonias'=> Colonia::findOrFail($Id_colonia)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_colonia)
    {
      $Colonias = Colonia::findOrFail($Id_colonia);   
      $Colonias->Colonia = $request->get('Colonia');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_colonia)
    {
        $Colonia= Colonia::findOrFail($Id_colonia);
        $Colonia->delete();

        return redirect('colonias'); 
    }
}
