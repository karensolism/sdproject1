<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;


class EstadoController extends Controller
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
        $estado= Estado::where('estado', 'LIKE', '%'.$query.'%' )
        ->orderBy('Id_estado', 'asc')
        ->get();

         return view('estados', ['estados' =>$estado, 'search' => $query]);
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts/estados/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosestado=request()->except('_token');
        Estado::insert($datosestado);
     
        return redirect('estados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_estado)
    {
        return view('layouts/estados/show', ['estados'=> Estado::findOrFail($Id_estado)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_estado)
    {
         return view('layouts/estados/edit', ['estados'=> Estado::findOrFail($Id_estado)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_estado)
    {
         $estados = Estado::findOrFail($Id_estado);   
      $estados->Estado = $request->get('Estado');

      $estados->update();

      return redirect('estados'); 
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_estado)
    {
        $estado= Estado::findOrFail($Id_estado);
        $estado->delete();

        return redirect('estados'); 
    }
}
