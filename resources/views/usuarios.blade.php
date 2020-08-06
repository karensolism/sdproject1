@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Usuarios registrados <a href="usuarios/create"><button type="button" class="btn btn-success float-right">Agregar</button></h2>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
       <th scope="col">Opciones</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($users as $users)
    <tr>
     
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>

      <td>
        <!--referencia al metodo del controlador-->
        <!--a href="//route('usuarios/edit', $users->id)}}"/a--><button type="button" class="btn btn-primary">Editar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>        
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection