@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h3>Editar forma de pago: {{$formadepagos->forma}}</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    
<form action="{{route('formapago.update', $formadepagos->Id_forma)}}" method="POST">
<!--pata actualizar directamente con el metodo update del usercontroller-->
  @method('PATCH')
{{csrf_field()}}
  
 <div class="form-group">
    <label for="Activo">Activo</label>
    <input type="text" class="form-control"  name="Activo" placeholder="Ingrese el Activo" value="{{ $formadepagos->Activo }}" required autocomplete="name" autofocus>
    
  </div>
 
  <div class="form-group">
    <label for="forma">Forma de pago</label>
    <input type="text" class="form-control"  name="forma" placeholder="Ingrese su nombre" value="{{ $formadepagos->forma }}" required autocomplete="name" autofocus>
    
  </div>
 
 </div>
    
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar cambios</button>  
   <a href="/formasdepago"><button type="button" class="btn btn-danger">Cancelar</button></a>
</form>
</div>
</div>

@endsection