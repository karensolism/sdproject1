@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Asesores registrados <a href="desarrolladora/create"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
      <th scope="col">Correo</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Logo</th>
       <th scope="col">Opciones</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($desarrolladoras  as $desarrolladoras)
    <tr>
     
      <th scope="row">{{$desarrolladoras->Id_desarrolladora}}</th>
      <td>{{$desarrolladoras->Nombre_desa}}</td>
      <td>{{$desarrolladoras->Correo}}</td>
      <td>{{$desarrolladoras->Tel_desa}}</td>
      <td>{{$desarrolladoras->Logo}}</td>

      <td> 
        <form action="{{ route('desarrolladora.destroy', $desarrolladoras->Id_desarrolladora) }}" method="POST">
          <a href="{{route('desarrolladora.show', $desarrolladoras->Id_desarrolladora)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('desarrolladora.edit', $desarrolladoras->Id_desarrolladora)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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