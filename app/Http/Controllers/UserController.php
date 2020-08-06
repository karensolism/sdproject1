<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        //muestra lista de registros    
     $users = User::all();
    return view('usuarios', ['users' =>$users]);
  
    }
     
    
    public function create()
    {
       //return view('usuarios.create');
        //$users ['users']=User::all();
        return view('layouts/usuarios/create');

    }

    
    public function store(Request $request)
    {
         $datosusers=request()->except('_token');
        User::insert($datosusers);
       // return response()->json($datosusers);

        return redirect('/usuarios');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
       // $datosusers = User::findOrFail($id);
        //return view('usuarios.create', compact('datosusers'));

       // return view('layouts/usuarios/edit');
       return view('usuarios.edit', ['user'=> User::findOrFail($id)]);
    }

    
    public function update(Request $request, $id)
    {

     $usuarios = User::findOrFail($id);   
      $usuarios->name = $request->get('name');
      $usuarios->email = $request->get('email');

      $usuarios->update();

      return redirect('/usuarios');
    }

    
    public function destroy($id)
    {
        //User::destroy($id);
          // return view('usuarios/create');
    }
}
