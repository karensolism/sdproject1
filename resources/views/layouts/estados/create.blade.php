@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">    
      <!--para ingresar datos se usa el metodo POST-->
<form action="{{route('estados.store')}}" method="POST">
{{csrf_field()}}
  
  <!--los names hacen referencia a los metodos que se van a guardar-->
  <div class="form-group">
    <label for="activo">Activo</label>
    <select id="activoCiudad" name="Activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo') }}" >
         <option value="1">SI</option>
         <option value="0">NO</option>
    </select>
    
  </div>
 <div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control @error('estado') is-invalid @enderror" name="estado" placeholder="Ingrese el Estado" value="{{ old('estado') }}" required autocomplete="estado" autofocus>
    
  </div>
 
    
  <button type="submit" class="btn btn-primary">Registrar</button>
   <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
</div>
</div>

@endsection