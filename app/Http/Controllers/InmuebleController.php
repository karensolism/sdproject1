<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inmueble;

class InmuebleController extends Controller
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
        $Inmueble= Inmueble::where('Precio', 'LIKE', '%'.$query.'%' )
        ->orderBy('Id_inmmueble', 'asc')
        ->get();

         return view('inmuebles', ['inmuebles' =>$Inmueble, 'search' => $query]);
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts/inmuebles/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosdesa=request()->except('_token');
        Inmueble::insert($datosdesa);
     
        // return redirect('inmuebles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_Inmueble)
    {
       return view('layouts/inmuebles/show', ['inmuebles'=> Inmueble::findOrFail($Id_Inmueble)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Inmueble)
    {
        return view('layouts/inmuebles/edit', ['inmuebles'=> Inmueble::findOrFail($Id_Inmueble)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Inmueble)
    {
      $Inmueble = Inmueble::findOrFail($Id_Inmueble);   
      $Inmueble->comision = $request->get('Comision');
      $Inmueble->Latitud = $request->get('Latitud');
      $Inmueble->Longitud = $request->get('Longitud');
      $Inmueble->Zoom = $request->get('Zoom');
      $Inmueble->Creacion = $request->get('Creacion');
      $Inmueble->Descripcion = $request->get('Descripcion');
      $Inmueble->Titulo = $request->get('Titulo');
      $Inmueble->Precio = $request->get('Precio');
      $Inmueble->Construccion = $request->get('Construccion');
      $Inmueble->Terreno = $request->get('Terreno');
      $Inmueble->Cuota_mantenimiento = $request->get('Cuota_mantenimiento');
      $Inmueble->Fecha_entrega = $request->get('Fecha_entrega');
      $Inmueble->Planta = $request->get('Planta');
      $Inmueble->Equipamiento = $request->get('Equipamiento');
      $Inmueble->Zoom = $request->get('Zoom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Inmueble)
    {
        $Inmueble= Inmueble::findOrFail($Id_Inmueble);
        $Inmueble->delete();

        return redirect('inmuebles'); 
    }
}
