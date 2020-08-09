@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
           <!--muestra el nombre del usuario en el formulario-->
      <h3>Editar empresa: {{ $empresas->Nombre_empr}}</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    
<form action="{{route('empresa.update', $empresas->Id_empresa)}}" method="POST">
<!--pata actualizar directamente con el metodo update del usercontroller-->
  @method('PATCH')
{{csrf_field()}}
   
    
  <div class="form-group">
    <label for="activo">Activo</label>
    <select id="activoEmp" name="Activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo') }}" >
         <option value="1">SI</option>
         <option value="0">NO</option>
    </select>
    
  </div>
 
   <div class="form-group">
    <label for="Nombre_empr">Nombre de la empresa</label>
    <input type="text" class="form-control"  name="Nombre_empr" placeholder="Ingrese el nombre" value="{{ $empresas->Nombre_empr }}" required autocomplete="name" autofocus>
    
  </div>
   <div class="form-group">
    <label for="Correo_empr">Correo de la empresa</label>
    <input type="text" class="form-control"  name="Correo_empr" placeholder="correo'@'ejemplo.com" value="{{ $empresas->Correo_empr }}" required autocomplete="name" autofocus>
    
  </div>
  <div class="form-group">
    <label for="Tel_empresa">Teléfono de empresa</label>
    <input type="text" class="form-control"  name="Tel_empresa" placeholder="" value="{{ $empresas->Tel_empresa }}" required autocomplete="name" autofocus>
    
  </div>

 
   <div class="form-group">
    <p>

    Logo de la empresa:

    <input type="file" name="imagensubida" accept="image/png, .jpeg, .jpg, image/gif">

    <!--input type="submit" value="Enviar datos"-->

    </p> 
  </div>

  <button type="submit" class="btn btn-primary">Guardar cambios</button> 
   <a href="/estados"><button type="button" class="btn btn-danger">Cancelar</button></a>
</form>
</div>
</div>

@endsection