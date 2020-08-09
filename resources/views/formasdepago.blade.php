@extends ('layouts.app')

@section ('content')
<div class="container">
  <h2>Formas de pago registradas <a href="{{route('formapago.create')}}"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

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
      <th scope="col">Forma</th>
    </tr>
  </thead>
  <tbody>
    @foreach($formapago as $forma)
    <tr>
     
      <th scope="row">{{$forma->Id_forma}}</th>
      <td>{{$forma->Forma}}</td>
 

      <td> 
        <form action="{{ route('formapago.destroy', $forma->Id_forma) }}" method="POST">
          <a href="{{route('formapago.show', $forma->Id_forma)}}"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="{{route('formapago.edit', $forma->Id_forma)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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