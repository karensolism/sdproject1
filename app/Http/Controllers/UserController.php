<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    
    public function index(Request $request)
    {
      //search es el nombre del navbar en app.blade
      $query= trim($request->get('search'));
      if ($request) {

        //busca usuario con like se dice que sea igual a lo que se escribe en el form ya sea al principio o al final
        $users= User::where('name', 'LIKE', '%'.$query.'%' )
        ->orderBy('id', 'asc')
        ->get();

         return view('usuarios', ['users' =>$users, 'search' => $query]);
      }

        //muestra lista de registros   

     //$users = User::all();
    //return view('usuarios', ['users' =>$users]);
  
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
        return view('layouts/usuarios/show', ['user'=> User::findOrFail($id)]);
    }

    
    public function edit($id)
    {
      
       return view('layouts/usuarios/edit', ['user'=> User::findOrFail($id)]);
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
        $usuario= User::findOrFail($id);

        $usuario->delete();

        return redirect('/usuarios'); 
    }
}
