<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeria;

class GaleriaController extends Controller
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
        $galeria= Galeria::where('Id_foto', 'LIKE', '%'.$query.'%' )
        ->orderBy('Id_foto', 'asc')
        ->get();

        return view('galeria', ['galerias' =>$galeria, 'search' => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts/galeria/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosgaleria=request()->except('_token');
        Galeria::insert($datosgaleria);

        if($request->hasFile('Foto'))
        {
            $datosgaleria['Foto'] = $request->file('Foto')->store('uploads/galeria', 'public');
        }
     
        return redirect('
            galeria');
    }

    /**
     * Display the specified resource.
     *

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_foto)
    {
       return view('layouts/galeria/show', ['galerias'=> Galeria::findOrFail($Id_Galeria)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_foto)
    {
        return view('layouts/galeria/edit', ['galerias'=> Galeria::findOrFail($Id_foto)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_foto)
    {
      $Galeria = Galeria::findOrFail($Id_foto);   
      $Galeria->foto = $request->get('Foto');
     
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_foto)
    {
        $Galeria= Galeria::findOrFail($Id_foto);
        $Galeria->delete();

        return redirect('galeria'); 
    }
}
