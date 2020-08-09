@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Servicios registrados <a href="{{route('servicio.create')}}"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
      <th scope="col">Servicio</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($Servicios as $servicio)
    <tr>
     
      <th scope="row">{{$servicio->Id_servicio}}</th>
      <td>{{$servicio->Servicio}}</td>


      <td> 
        <form action="{{ route('servicio.destroy', $servicio->Id_servicio) }}" method="POST">
          <a href="{{route('servicio.show', $servicio->Id_servicio)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('servicio.edit', $servicio->Id_servicio)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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