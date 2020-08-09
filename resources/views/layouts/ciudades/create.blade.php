@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">    
<form action="{{route('usuarios.store')}}" method="POST">
{{csrf_field()}}

<div class="form-group">
    <label for="name">Activo</label>
    <select id="activoDesarrolladora" name="Activo">
         <option value="1">SI</option>
         <option value="0">NO</option>
       </select>
    
  </div>
  
 <div class="form-group">
    <label for="ciudad">Ciudad</label>
    <input type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" placeholder="Ingrese la ciudad" value="{{ old('ciudad') }}" required autocomplete="name" autofocus>
    
  </div>    
    
  <button type="submit" class="btn btn-primary">Registrar</button>
   <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
</div>
</div>

@endsection