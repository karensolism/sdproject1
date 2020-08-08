@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Estados registrados <a href="estados/create"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Activo</th>
      <th scope="col">Estado</th>
      <th scope="col">Opciones</th>
     
    </tr>
  </thead>
  <tbody>
   
   @foreach($estados as $estados)
    <tr>
     
      <th scope="row">{{$estados->Id_estado}}</th>
      <td>{{$estados->Activo}}</td>
      <td>{{$estados->Estado}}</td>

      <td>
        <button type="button" class="btn btn-light">Ver</button>
        <!--referencia al metodo del controlador-->
        <a href="{{route('estados/edit', $estados->Id_estados)}}"/a><button type="button" class="btn btn-primary">Editar</button>
        <!--formulario que lleva al metodo destroy-->
        <form action="{{ route('estados.destroy', $estados-> Id_estados) }}" method="POST">
          @csrf
          @method('DELETE')
       <button type="button" class="btn btn-danger">Eliminar</button>        
        </form>
           </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection