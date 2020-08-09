@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Asesores registrados <a href="usuarios/create"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
 
     
    </tr>
  </thead>
  <tbody>
    @foreach($asesor as $asesor)
    <tr>
     
      <th scope="row">{{$asesor->Id_asesor}}</th>
      <td>{{$asesor->Nombre}}</td>

      <td> 
        <form action="{{ route('asesor.destroy', $asesor->Id_asesor) }}" method="POST">
          <a href="{{route('asesor.show', $asesor->Id_asesor)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('asesor.edit', $asesor->Id_asesor)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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