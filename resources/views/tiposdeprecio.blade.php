@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Tipos de Precio registrados <a href="{{route('tipodeprecio.create')}}"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
      <th scope="col">Tipo</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($tipoprecios as $tipo)
    <tr>
     
      <th scope="row">{{$tipo->id_tipoPrecio}}</th>
      <td>{{$tipo->Tipo}}</td>

      <td> 
        <form action="{{ route('tipodeprecio.destroy', $tipo->id_tipoPrecio) }}" method="POST">
          <a href="{{route('tipodeprecio.show', $tipo->id_tipoPrecio)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('tipodeprecio.edit', $tipo->id_tipoPrecio)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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