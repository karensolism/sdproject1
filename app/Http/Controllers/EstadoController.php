<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;


class EstadoController extends Controller
{
    //muestra una lista de los registros
     
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

   //muestra el formulario para crear un nuevo registro
    public function create()
    {
         return view('layouts/estados/create');
    }

    //almacena los registros recien creados en la base de datos
    public function store(Request $request)
    {
         $datosestado=request()->except('_token');
        Estado::insert($datosestado);
     
        return redirect('estados');
    }

   //muestra registro especificos
    public function show($Id_estado)
    {
        return view('layouts/estados/show', ['estados'=> Estado::findOrFail($Id_estado)]);
    }

    //muestra el formulario con los datos a editar
    public function edit($Id_estado)
    {
         return view('layouts/estados/edit', ['estados'=> Estado::findOrFail($Id_estado)]);
    }

    //actualiza un registro
    public function update(Request $request, $Id_estado)
    {
      $estados = Estado::findOrFail($Id_estado);   
      $estados->Estado = $request->get('Estado');

      $estados->update();

      return redirect('estados'); 
    
    }

   //elimina un registro especifico de la base de datos
    public function destroy($Id_estado)
    {
        $estado= Estado::findOrFail($Id_estado);
        $estado->delete();

        return redirect('estados'); 
    }
}
