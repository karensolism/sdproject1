@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Tipos de Inmuebles registrados <a href="{{route('tipodeinmueble.create')}}"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
      <th scope="col">Tipo de inmueble</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($tipoinmuebles as $tipo)
    <tr>
     
      <th scope="row">{{$tipo->Id_tipo}}</th>
      <td>{{$tipo->Tipo_inmueble}}</td>

      <td> 
        <form action="{{ route('tipodeinmueble.destroy', $tipo->Id_tipo) }}" method="POST">
          <a href="{{route('tipodeinmueble.show', $tipo->Id_tipo)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('tipodeinmueble.edit', $tipo->Id_tipo)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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