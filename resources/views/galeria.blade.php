@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Asesores registrados <a href="galeria/create"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
      <th scope="col">Foto</th>
 
     
    </tr>
  </thead>
  <tbody>
    @foreach($galerias as $galeria)
    <tr>
     
      <th scope="row">{{$asesor->id_foto}}</th>
      <td>{{$asesor->Foto}}</td>

      <td> 
        <form action="{{ route('galeria.destroy', $asesor->id_foto) }}" method="POST">
          <a href="{{route('galeria.show', $galeria->id_foto)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('galeria.edit', $galeria->id_foto)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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