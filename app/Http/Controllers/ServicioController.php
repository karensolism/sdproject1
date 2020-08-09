<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class ServicioController extends Controller
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
        $Servicio= Servicio::where('Servicio', 'LIKE', '%'.$query.'%' )
        ->orderBy('Id_servicio', 'asc')
        ->get();

         return view('Servicios', ['Servicios' =>$Servicio, 'search' => $query]);
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts/servicios/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datoservicio=request()->except('_token');
        Servicio::insert($datoservicio);
     
        return redirect('servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_servicio)
    {
       return view('layouts/servicios/show', ['servicios'=> Servicio::findOrFail($Id_servicio)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_servicio)
    {
        return view('layouts/servicios/edit', ['servicios'=> Servicio::findOrFail($Id_servicio)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_servicio)
    {
      $Servicio = Servicio::findOrFail($Id_servicio);   
      $Servicio->Servicio = $request->get('Servicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_servicio)
    {
        $Servicio= Servicio::findOrFail($Id_servicio);
        $Servicio->delete();

        return redirect('servicios'); 
    }
}
