@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>inmuebleses registrados <a href="{{route('inmueble.create')}}"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
      <th scope="col">Comición</th>
      <th scope="col">Latitud</th>
      <th scope="col">Longitud</th>
      <th scope="col">Zoom</th>
      <th scope="col">Creación</th>
      <th scope="col">Descripción</th>
      <th scope="col">Título</th>
      <th scope="col">Precio</th>
      <th scope="col">Construcción</th>
      <th scope="col">Terreno</th>
      <th scope="col">Cuota</th>
      <th scope="col">Fecha de entrega</th>
      <th scope="col">Planta</th>
      <th scope="col">Equipamiento</th>
      <th scope="col">Asesor</th>
      <th scope="col">Modelo</th>
      <th scope="col">Colonia</th>
       <th scope="col">Opciones</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($inmuebles as $inmueble)
    <tr>
     
      <th scope="row">{{$inmuebles->Id_inmueble}}</th>
      <td>{{$inmueble->Comicion}}</td>
      <td>{{$inmueble->Latitud}}</td>
      <td>{{$inmueble->Zoom}}</td>
      <td>{{$inmueble->Creacion}}</td>
      <td>{{$inmueble->Descripcion}}</td>
      <td>{{$inmueble->Titulo}}</td>
      <td>{{$inmueble->Precio}}</td>
      <td>{{$inmueble->Construccion}}</td>
      <td>{{$inmueble->Terreno}}</td>
      <td>{{$inmueble->Cuota_mantenimiento}}</td>
      <td>{{$inmueble->Fecha_entrega}}</td>
      <td>{{$inmueble->Planta}}</td>
      <td>{{$inmueble->Equipamiento}}</td>
      <td>{{$inmueble->Id_asesorfk}}</td>
      <td>{{$inmueble->id_modelofk}}</td>
      <td>{{$inmueble->id_coloniafk}}</td>



      <td> 
        <form action="{{ route('inmuebles.destroy', $inmueble->Id_inmueble) }}" method="POST">
          <a href="{{route('inmuebles.show', $inmueble->Id_inmueble)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('inmuebles.edit', $inmueble->Id_inmueble)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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