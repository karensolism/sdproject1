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
    @foreach($estados as $estados)
    <tr>
     
      <th scope="row">{{$estados->Id_estados}}</th>
      <td>{{$estados->Activo}}</td>
      <td>{{$estados->Estado}}</td>

      <td> 
        <form action="{{route('estados.destroy', $estados-> Id_estados) }}" method="POST">
          <a href="{{route('estados.show', $estados->Id_estados)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('estados.edit', $estados->Id_estados)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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