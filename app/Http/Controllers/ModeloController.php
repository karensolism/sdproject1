<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
           $query= trim($request->get('search'));
      if ($request) {

        //busca usuario con like se dice que sea igual a lo que se escribe en el form ya sea al principio o al final
       $Modelo= Modelo::where('Modelo', 'LIKE', '%'.$query.'%' )
        ->orderBy('Id_Modelo', 'asc')
        ->get();

         return view('modelos', ['modelos' =>$Modelo, 'search' => $query]);
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
         return view('layouts/modelos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosmodelos=request()->except('_token');
        Modelo::insert($datosmodelos);
     
        return redirect('modelos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_modelo)
    {
       return view('layouts/modelos/show', ['modelos'=> Modelo::findOrFail($Id_modelo)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_modelo)
    {
        return view('layouts/modelos/edit', ['modelos'=> Modelo::findOrFail($Id_modelo)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_modelo)
    {
      $Modelo = Modelo::findOrFail($Id_modelo);   
      $Modelo->Modelo = $request->get('Modelo');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Modelo)
    {
        $Modelo= Modelo::findOrFail($Id_modelo);
        $Modelo->delete();

        return redirect('modelos'); 
    }
}
