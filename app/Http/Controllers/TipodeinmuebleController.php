<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipoinmueble;

class TipodeinmuebleController extends Controller
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
         $Tipoinmueble= Tipoinmueble::where('Tipo_inmueble', 'LIKE', '%'.$query.'%' )
        ->orderBy('Id_tipo', 'asc')
        ->get();

         return view('tipoinmuebles', ['tipoinmuebles' =>$Tipoinmueble, 'search' => $query]);
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts/tipoinmuebles/create');
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
        Tipoinmueble::insert($datostipo);
     
        return redirect('tipoinmuebles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_tipo)
    {
       return view('layouts/Tipoinmuebles/show', ['Tipoinmuebles'=> Tipoinmueble::findOrFail($Id_tipo)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_tipo)
    {
        return view('layouts/tipoinmuebles/edit', ['tipoinmuebles'=> Tipoinmueble::findOrFail($Id_tipo)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_tipo)
    {
      $Tipoinmueble = Tipoinmueble::findOrFail($Id_tipo);   
      $Tipoinmueble->Tipo = $request->get('Tipo_inmueble');
      
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_tipo)
    {
        $Tipoinmueble= Tipoinmueble::findOrFail($Id_tipo);
        $Tipoinmueble->delete();

        return redirect('tipoinmuebles'); 
    }
}
