@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
           <!--muestra el nombre del usuario en el formulario-->
      <h3>Editar Servicio: {{ $servicios->Servicio}}</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    
<form action="{{route('servicio.update', $servicios->Id_servicio)}}" method="POST">
<!--pata actualizar directamente con el metodo update del usercontroller-->
  @method('PATCH')
{{csrf_field()}}
  
 <div class="form-group">
    <label for="activo">Activo</label>
    <input type="text" class="form-control"  name="Activo" placeholder="Ingrese su nombre" value="{{ $servicios->Activo }}" required autocomplete="name" autofocus>
    
  </div>
 
   <div class="form-group">
    <label for="Servicio">Servicio</label>
    <input type="text" class="form-control"  name="Servicio" placeholder="Ingrese su nombre" value="{{ $servicios->Servicio }}" required autocomplete="name" autofocus>
    
  </div>
  <button type="submit" class="btn btn-primary">Guardar cambios</button> 
   <a href="/servicio"><button type="button" class="btn btn-danger">Cancelar</button></a>
</form>
</div>
</div>

@endsection