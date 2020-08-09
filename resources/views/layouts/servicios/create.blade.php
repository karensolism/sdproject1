@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">    
<form action="{{route('servicio.store')}}" method="POST">
{{csrf_field()}}
  
  <div class="form-group">
    <label for="activo">Activo</label>
    <select id="activoCiudad" name="Activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo') }}" >
         <option value="1">SI</option>
         <option value="0">NO</option>
    </select>

    
  </div>
 <div class="form-group">
    <label for="estado">Servicio</label>
    <input type="text" class="form-control @error('servicio') is-invalid @enderror" name="Servicio" placeholder="Ingrese el Servicio" value="{{ old('Servicio') }}" required autocomplete="servicio" autofocus>
    
  </div>
 
    
  <button type="submit" class="btn btn-primary">Registrar</button>
   <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
</div>
</div>

@endsection