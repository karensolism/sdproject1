@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>ciudades registradas <a href="{{route('ciudad.create')}}"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
      <th scope="col">Ciudad</th>
      <th scope="col">Estado</th>
      <th scope="col">Opciones </th>

     
    </tr>
  </thead>
  <tbody>
    @foreach($ciudades as $ciudad)
    <tr>
     
      <th scope="row">{{$ciudad->id_ciudad}}</th>
      <td>{{$ciudad->Ciudad}}</td>
      <td>{{$ciudad->Id_estadofk}}</td>


      <td> 
        <form action="{{ route('ciudad.destroy', $ciudad->id_ciudad) }}" method="POST">
          
        <!--referencia al metodo del controlador-->
        <a href="{{route('ciudad.edit', $ciudad->id_ciudad)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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