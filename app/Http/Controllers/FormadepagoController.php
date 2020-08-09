<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formadepago;

class FormadepagoController extends Controller
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
        $formapago= Formadepago::where('forma', 'LIKE', '%'.$query.'%' )
        ->orderBy('Id_forma', 'asc')
        ->get();

         return view('formasdepago', ['formapago' =>$formapago, 'search' => $query]);
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('layouts/formasdepago/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosforma=request()->except('_token');
        Formadepago::insert($datosforma);
     
        return redirect('formapago');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_forma)
    {
         return view('layouts/formasdepagos/show', ['formadepagos'=> Formadepago::findOrFail($Id_forma)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_forma)
    {
         return view('layouts/formasdepago/edit', ['formadepagos'=> Formadepago::findOrFail($Id_forma)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_forma)
    {
        $Formadepago = Formadepago::findOrFail($Id_forma);   
      $Formadepago->forma = $request->get('forma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_forma)
    {
        $Formadepago= Formadepago::findOrFail($Id_forma);
        $Formadepago->delete();

        return redirect('formapago'); 
    }
}
