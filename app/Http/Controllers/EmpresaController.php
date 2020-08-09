<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller
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
        $empresa= Empresa::where('Nombre_empr', 'LIKE', '%'.$query.'%' )
        ->orderBy('Id_empresa', 'asc')
        ->get();

         return view('empresas', ['empresas' =>$empresa, 'search' => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts/empresas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosempresa=request()->except('_token');
        Empresa::insert($datosempresa);
     
        return redirect('empresas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_empresa)
    {
         return view('layouts/empresas/show', ['empresas'=> Empresa::findOrFail($Id_empresa)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_empresa)
    {
         return view('layouts/empresas/edit', ['empresas'=> Empresa::findOrFail($Id_empresa)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_empresa)
    {
         $empresa = Empresa::findOrFail($Id_empresa);   
      $empresa->nombre = $request->get('Nombre_empr');
      $empresa->correo = $request->get('Correo_empr');
      $empresa->telefono = $request->get('Tel_empr');
      $empresa->logo = $request->get('Logo_emp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_empresa)
    {
        $empresa= Empresa::findOrFail($Id_empresa);
        $empresa->delete();

        return redirect('empresas'); 
    }
}
