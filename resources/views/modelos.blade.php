@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Modelos registrados <a href="{{route('modelo.create')}}"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
      <th scope="col">Modelo</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($modelos as $mod)
    <tr>
     
      <th scope="row">{{$mod->Id_modelo}}</th>
      <td>{{$mod->Modelo}}</td>

      <td> 
        <form action="{{ route('modelo.destroy', $mod->Id_modelo) }}" method="POST">
          <a href="{{route('modelo.show', $mod->Id_modelo)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('modelo.edit', $mod->Id_modelo)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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