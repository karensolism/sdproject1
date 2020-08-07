<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desarrolladora;

class DesarrolladoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
        //search es el nombre del navbar en app.blade
      $query= trim($request->get('search'));
      if ($request) {

        //busca usuario con like se dice que sea igual a lo que se escribe en el form ya sea al principio o al final
        $desarrolladora= Desarrolladora::where('Nombre_desa', 'LIKE', '%'.$query.'%' )
        ->orderBy('Id_desarrolladora', 'asc')
        ->get();

         return view('desarrolladoras', ['desarrolladoras' =>$desarrolladora, 'search' => $query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts/desarrolladoras/create');
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
        Desarrolladora::insert($datosdesa);
     
        return redirect('desarrolladoras');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_desarrolladora)
    {
       return view('layouts/desarrolladoras/show', ['desarrolladoras'=> Desarrolladora::findOrFail($Id_desarrolladora)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_desarrolladora)
    {
        return view('layouts/desarrolladoras/edit', ['desarrolladoras'=> Desarrolladora::findOrFail($Id_desarrolladora)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_desarrolladora)
    {
      $desarrolladora = Desarrolladora::findOrFail($Id_asesor);   
      $desarrolladora->nombre = $request->get('Nombre_desa');
      $desarrolladora->correo = $request->get('correo');
      $desarrolladora->telefono = $request->get('Tel_desa');
      $desarrolladora->correo = $request->get('correo');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_ciudad)
    {
        $ciudad= Ciudad::findOrFail($id_ciudad);
        $ciudad->delete();

        return redirect('ciudad'); 
    }
}
