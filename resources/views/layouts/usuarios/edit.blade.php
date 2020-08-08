@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
           <!--muestra el nombre del usuario en el formulario-->
      <h3>Editar usuario: {{ $user->name}}</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    
<form action="{{route('usuarios.update', $user->id)}}" method="POST">
<!--pata actualizar directamente con el metodo update del usercontroller-->
  @method('PATCH')
{{csrf_field()}}
  
 <div class="form-group">
    <label for="name">Usuario</label>
    <input type="text" class="form-control"  name="name" placeholder="Ingrese su nombre" value="{{ $user->name }}" required autocomplete="name" autofocus>
    
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Ingrese su email"value="{{ $user->email}}" required autocomplete="email">

    
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar cambios</button> 
   <a href="/usuarios"><button type="button" class="btn btn-danger">Cancelar</button></a>
</form>
</div>
</div>

@endsection