<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\Asesor;

class AsesorController extends Controller
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
        $asesores= Asesor::where('Nombre', 'LIKE', '%'.$query.'%' )
        ->orderBy('Id_asesor', 'asc')
        ->get();

         return view('asesores', ['asesor' =>$asesores, 'search' => $query]);
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/asesores/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosasesor=request()->except('_token');
        Asesor::insert($datosasesor);

        return redirect('asesores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_asesor)
    {
         return view('layouts/asesores/show', ['asesor'=> Asesor::findOrFail($Id_asesor)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_asesor)
    {
       return view('layouts/asesores/edit', ['asesor'=> Asesor::findOrFail($Id_asesor)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_asesor)
    {
      $Asesores = Asesor::findOrFail($Id_asesor);   
      $Asesores->Nombre = $request->get('Nombre');
      $Asesores->Apellido = $request->get('Apellido');
      $Asesores->Correo = $request->get('Correo_asesor');
      $Asesores->contrasenia = $request->get('Contrasenia');
      $Asesores->telefono = $request->get('Telefono');
//¿debo poner las llaves foraneas de usuario y empresa?

      $Asesores->update();

      return redirect('asesores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_asesor)
    {
         $asesor= Asesor::findOrFail($Id_asesor);

        $asesor->delete();

        return redirect('asesores'); 
    }
}
