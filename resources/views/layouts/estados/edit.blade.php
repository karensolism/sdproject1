@@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
           <!--muestra el nombre del usuario en el formulario-->
      <h3>Editar estado: {{ $estado->Estado}}</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    
<form action="{{route('estados.update', $estado->Id_estado)}}" method="POST">
<!--pata actualizar directamente con el metodo update del usercontroller-->
  @method('PATCH')
{{csrf_field()}}
  
 <div class="form-group">
    <label for="activo">Activo</label>
    <input type="text" class="form-control"  name="activo" placeholder="Ingrese su nombre" value="{{ $estado->Activo }}" required autocomplete="name" autofocus>
    
  </div>
 
   <div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control"  name="estado" placeholder="Ingrese su nombre" value="{{ $estado->Estado }}" required autocomplete="name" autofocus>
    
  </div>
  <button type="submit" class="btn btn-primary">Guardar cambios</button> 
   <a href="/estados"><button type="button" class="btn btn-danger">Cancelar</button></a>
</form>
</div>
</div>

@endsection