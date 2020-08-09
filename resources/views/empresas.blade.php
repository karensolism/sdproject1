@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Asesores registrados <a href="{{route('empresa.create')}}"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
    @foreach($empresas as $empresa)
    <tr>
     
      <th scope="row">{{$empresa->Id_empresa}}</th>
      <td>{{$empresa->Nombre_empr}}</td>
      <td>{{$empresa->Correo_empr}}</td>
      <td>{{$empresa->Tele_empresa}}</td>
      <td>{{$empresa->Logo}}</td>

      <td> 
        <form action="{{ route('empresa.destroy', $empresa->Id_asesor) }}" method="POST">
          <a href="{{route('empresa.show', $empresa->Id_asesor)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('empresa.edit', $empresa->Id_asesor)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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