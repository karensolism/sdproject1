@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">    
<form action="{{route('usuarios.update', $user->id)}}" method="POST">
<!--pata actualizar directamente con el metodo update del usercontroller-->
  @method('PATCH')
{{csrf_field()}}
  
 <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Ingrese su nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Ingrese su email"value="{{ old('email') }}" required autocomplete="email">

    
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