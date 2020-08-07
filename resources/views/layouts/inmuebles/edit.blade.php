@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h3>Editar desarrollo: {{ $user->name}}</h3>
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
    <label for="name">Nombre</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="nombre" placeholder="Ingrese su nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
  </div>
  <div class="form-group">
    <label for="email">Correo</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="correo" placeholder="Ingrese su correo"value="{{ }}" required autocomplete="email">

    
  </div>
  <div class="form-group">
    <label for="telefono">Teléfono</label>
    <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" required autocomplete="telefono" value="{{ }}">
  </div>

 <div class="form-group">
    <label for="name">Logo</label>
    <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo"  value="{{ }}" autofocus>
    
  </div>

    
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar cambios</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
</div>
</div>

@endsection