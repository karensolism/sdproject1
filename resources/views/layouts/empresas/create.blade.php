@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">    
      <!--para ingresar datos se usa el metodo POST-->
<form action="{{route('empresa.store')}}" method="POST">
{{csrf_field()}}
  
  <!--los names hacen referencia a los metodos que se van a guardar-->
  <div class="form-group">
    <label for="activo">Activo</label>
    <select id="activoEmp" name="Activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo') }}" >
         <option value="1">SI</option>
         <option value="0">NO</option>
    </select>
    
  </div>
 <div class="form-group">
    <label for="Nombre_empr">Nombre de la empresa</label>
    <input type="text" class="form-control @error('Nombre_empr') is-invalid @enderror" name="Nombre_empr" placeholder="Ingrese la empresa" value="{{ old('Nombre_empr') }}" required autocomplete="Nombre_empr" autofocus>
    
  </div>
 
    <div class="form-group">
    <label for="Correo_empr">Correo de la empresa</label>
    <input type="text" class="form-control @error('Correo_empr') is-invalid @enderror" name="Correo_empr" placeholder="Ingrese el correo" value="{{ old('Correo_empr') }}" required autocomplete="Correo_empr" autofocus>
    
  </div>

   <div class="form-group">
    <label for="Tel_empresa">Teléfono de empresa</label>
    <input type="text" class="form-control @error('Tel_empresa') is-invalid @enderror" name="Tel_empresa" placeholder="Ingrese el teléfono " value="{{ old('Tel_empresa') }}" required autocomplete="Tel_empresa" autofocus>
    
  </div>
   <div class="form-group">
    <p>

    Logo de la empresa:

    <input type="file" name="imagensubida" accept="image/png, .jpeg, .jpg, image/gif">

    <!--input type="submit" value="Enviar datos"-->

    </p> 
  </div>


  <button type="submit" class="btn btn-primary">Registrar</button>
   <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
</div>
</div>

@endsection