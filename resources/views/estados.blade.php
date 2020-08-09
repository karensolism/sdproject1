@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Estados registrados <a href="estados/create"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

 <h6>
  @if($search ?? '')
  <div class="alert alert-primary" role="alert">
  Resultados de búsqueda '{{$search ?? ''}}' son:
</div>
    @endif
</h6>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Activo</th>
      <th scope="col">Estado</th>
     
    </tr>
  </thead>
  <tbody>
<!-- traido del controlador para retornar a la vista-->
    @foreach($estados as $estado)
    <tr>
     
      <th scope="row">{{$estado->Id_estado}}</th>
      <td>{{$estado->Activo}}</td>
      <td>{{$estado->Estado}}</td>

      <td> 
        <form action="{{route('estados.destroy', $estado->Id_estado) }}" method="POST">
          <a href="{{route('estados.show', $estado->Id_estado)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('estados.edit', $estado->Id_estado)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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