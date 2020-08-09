@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>colonias registradas <a href="{{route('colonia.create')}}"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
      <th scope="col">Colonia</th>
      <th scope="col">Ciudad</th>

     
    </tr>
  </thead>
  <tbody>
    @foreach($colonias as $colonia)
    <tr>
     
      <th scope="row">{{$colonia->Id_colonia}}</th>
      <td>{{$colonia->Colonia}}</td>
      <td>{{$colonia->id_ciudadfk}}</td>


      <td> 
        <form action="{{ route('colonia.destroy', $colonia->Id_colonia) }}" method="POST">
          <a href="{{route('colonia.show', $colonia->Id_colonia)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('colonia.edit', $colonia->Id_colonia)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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