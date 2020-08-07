<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

class CiudadController extends Controller
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
        $ciudades= Ciudad::where('Ciudad', 'LIKE', '%'.$query.'%' )
        ->orderBy('id_ciudad', 'asc')
        ->get();

         return view('ciudad', ['ciudads' =>$ciudades, 'search' => $query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts/ciudades/create')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosciudades=request()->except('_token');
        Ciudad::insert($datosciudades);
     
        return redirect('ciudad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_ciudad)
    {
       return view('layouts/ciudades/show', ['ciudad'=> Ciudad::findOrFail($id_ciudad)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_ciudad)
    {
        return view('layouts/ciudades/edit', ['ciudad'=> Ciudad::findOrFail($id_ciudad)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_ciudad)
    {
      $Ciudades = Ciudad::findOrFail($Id_asesor);   
      $Ciudades->ciudad = $request->get('Ciudad');
    
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
