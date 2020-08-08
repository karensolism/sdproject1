@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">    
<form action="{{route('estados.store')}}" method="POST">
{{csrf_field()}}
  
 <div class="form-group">
    <label for="activo">Activo</label>
    <input type="text" class="form-control @error('Activo') is-invalid @enderror" name="activo" placeholder="Ingrese su nombre" value="{{ old('activo') }}" required autocomplete="name" autofocus>
    
  </div>
  <div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control @error('Estado') is-invalid @enderror" name="estado" placeholder="Ingrese su email"value="{{ old('Estado') }}" required autocomplete="estado">

    
  </div>
  <div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Ingrese una Contraseña">
  </div>
  
    
  <button type="submit" class="btn btn-primary">Registrar</button>
   <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
</div>
</div>

@endsection