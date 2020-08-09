@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>inmuebleses registrados <a href="{{route('inmueble.create')}}"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

 <h6>
  @if($search)
  <div class="alert alert-primary" role="alert">
  Resultados de búsqueda '{{$search}}' son:
</div>
    @endif
</h6>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Teléfono</th>
       <th scope="col">Opciones</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($inmuebles as $inmueble)
    <tr>
     
      <th scope="row">{{$inmuebles->Id_inmueble}}</th>
      <td>{{$inmueble->Comicion}}</td>
      <td>{{$inmueble->Latitud}}</td>
      <td>{{$inmueble->Zoom}}</td>
      <td>{{$inmueble->Creacion}}</td>

      <td> 
        <form action="{{ route('inmuebles.destroy', $inmueble->Id_inmueble) }}" method="POST">
          <a href="{{route('inmuebles.show', $inmueble->Id_inmueble)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('inmuebles.edit', $inmueble->Id_inmueble)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
       <!--formulario que lleva al metodo destroy-->
          @csrf
          @method('DELETE')
       <button type="submit" class="btn btn-danger">Eliminar</button>        
        </form>
           </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection