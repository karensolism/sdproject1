<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipoprecio;

class TipodeprecioController extends Controller
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
        $Tipoprecio= Tipoprecio::where('Tipo', 'LIKE', '%'.$query.'%' )
        ->orderBy('id_tipoPrecio', 'asc')
        ->get();

         return view('tiposdeprecio', ['tipoprecios' =>$Tipoprecio, 'search' => $query]);
     }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts/tipoprecios/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datostipo=request()->except('_token');
        Tipoprecio::insert($datostipo);
     
        return redirect('tipodeprecio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_tipoPrecio)
    {
       return view('layouts/Tipoprecios/show', ['Tipoprecios'=> Tipoprecio::findOrFail($id_tipoPrecio)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_tipoPrecio)
    {
        return view('layouts/tipoprecios/edit', ['tipoprecios'=> Tipoprecio::findOrFail($id_tipoPrecio)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tipoPrecio)
    {
      $Tipoprecio = Tipoprecio::findOrFail($id_tipoPrecio);   
      $Tipoprecio->Tipo = $request->get('Tipo');
      
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tipoPrecio)
    {
        $Tipoprecio= Tipoprecio::findOrFail($id_tipoPrecio);
        $Tipoprecio->delete();

        return redirect('tipodeprecio'); 
    }
}
