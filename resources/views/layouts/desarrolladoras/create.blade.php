@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">    
<form action="{{route('desarrolladora.store')}}" method="POST">
{{csrf_field()}}

<div class="form-group">
    <label for="name">Activo</label>
    <select id="activoDesarrolladora" name="Activo">
         <option value="1">SI</option>
         <option value="0">NO</option>
       </select>
    
  </div>
  
 <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="nombre" placeholder="Ingrese su nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
  </div>
  <div class="form-group">
    <label for="email">Correo</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="correo" placeholder="Ingrese su correo"value="{{ old('correo') }}" required autocomplete="email">

    
  </div>
  <div class="form-group">
    <label for="telefono">Teléfono</label>
    <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" required autocomplete="telefono" value="{{ old('telefono') }}">
  </div>

 <div class="form-group">
    <label for="name">Logo</label>
    <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo"  value="{{ old('logo') }}" autofocus>
    
  </div>
  
    
  <button type="submit" class="btn btn-primary">Registrar</button>
   <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
</div>
</div>

@endsection