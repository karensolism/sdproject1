@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Formas de pago registrados <a href="formasdepago/create"><button type="button" class="btn btn-success float-right">Agregar</button></h2>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Activo</th>
      <th scope="col">Forma de pago</th>    
      <th scope="col">Opciones</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($forma as $forma)
    <tr>
     
      <th scope="row">{{$forma->Id_forma}}</th>
      <td>{{$forma->forma}}</td>
     

      <td>
        <button type="button" class="btn btn-light">Ver</button>
        <!--referencia al metodo del controlador-->
        <a href="{{route('formasdepago/edit', $forma->Id_forma)}}"/a><button type="button" class="btn btn-primary">Editar</button>
        <!--formulario que lleva al metodo destroy-->
        <form action="{{ route('formasdepago.destroy', $forma-> Id_forma) }}" method="POST">
          @csrf
          @method('DELETE')
       <button type="button" class="btn btn-danger">Eliminar</button>        
        </form>
           </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection