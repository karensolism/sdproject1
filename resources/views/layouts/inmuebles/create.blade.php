@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">    
<form action="{{route('inmueble.store')}}" method="POST">
{{csrf_field()}}

<div class="form-group">
    <label for="name">Activo</label>
    <select id="activoDesarrolladora" name="Activo">
         <option value="1">SI</option>
         <option value="0">NO</option>
       </select>
    
  </div>
  
 <div class="form-group">
    <label for="name">Comision</label>
    <input type="text" class="form-control @error('Comision') is-invalid @enderror" name="Comision"  value="{{ old('Comision') }}" required autocomplete="name" autofocus>
    
  </div>
  <div class="form-group">
    <label for="Latitud">Latitud</label>
    <input type="Latitud" class="form-control @error('Latitud') is-invalid @enderror" name="Latitud" value="{{ old('Latitud') }}" required autocomplete="Latitud">
  </div>

  </div>
  <div class="form-group">
    <label for="Longitud">Longitud</label>
    <input type="Longitud" class="form-control @error('Longitud') is-invalid @enderror" name="Longitud" value="{{ old('Longitud') }}" required autocomplete="Longitud">
  </div>

    </div>
  <div class="form-group">
    <label for="Zoom">Zoom</label>
    <input type="Zoom" class="form-control @error('Zoom') is-invalid @enderror" name="Zoom" value="{{ old('Zoom') }}" required autocomplete="Zoom">
  </div>

    </div>
  <div class="form-group">
    <label for="Creacion">Creacion</label>
    <input type="Creacion" class="form-control @error('Creacion') is-invalid @enderror" name="Creacion" value="{{ old('Creacion') }}" required autocomplete="Creacion">
  </div>

    </div>
  <div class="form-group">
    <label for="Descripcion">Descripcion</label>
    <input type="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" name="Descripcion" value="{{ old('Descripcion') }}" required autocomplete="Descripcion">
  </div>

    </div>
  <div class="form-group">
    <label for="Titulo">Titulo</label>
    <input type="Titulo" class="form-control @error('Titulo') is-invalid @enderror" name="Titulo" value="{{ old('Titulo') }}" required autocomplete="Titulo">
  </div>

  </div>
  <div class="form-group">
    <label for="Precio">Precio</label>
    <input type="Precio" class="form-control @error('Precio') is-invalid @enderror" name="Precio" value="{{ old('Precio') }}" required autocomplete="Precio">
  </div>

  <div class="form-group">
    <label for="Construccion ">Construcción </label>
    <input type="text" class="form-control @error('Construccion ') is-invalid @enderror" name="Construccion " required autocomplete="Construccion " value="{{ old('Construccion ') }}">
  </div>

  </div>
  <div class="form-group">
    <label for="Terreno">Terreno</label>
    <input type="Terreno" class="form-control @error('Terreno') is-invalid @enderror" name="Terreno" value="{{ old('Terreno') }}" required autocomplete="Terreno">
  </div>

  </div>
  <div class="form-group">
    <label for="Cuota">Cuota</label>
    <input type="Cuota" class="form-control @error('Cuota') is-invalid @enderror" name="Cuota" value="{{ old('Cuota_mantenimiento') }}" required autocomplete="Cuota">
  </div>

    </div>
  <div class="form-group">
    <label for="Fecha">Fecha de entrega</label>
    <input type="Fecha" class="form-control @error('Fecha') is-invalid @enderror" name="Fecha" value="{{ old('Fecha_entrega') }}" required autocomplete="Fecha">
  </div>

    </div>
  <div class="form-group">
    <label for="Planta">Planta</label>
    <input type="Planta" class="form-control @error('Planta') is-invalid @enderror" name="Planta" value="{{ old('Planta') }}" required autocomplete="Planta">
  </div>

 
  <div class="form-group">
    <label for="Equipamiento">Equipamiento</label>
    <input type="Equipamiento" class="form-control @error('Equipamiento') is-invalid @enderror" name="Equipamiento" value="{{ old('Equipamiento') }}" required autocomplete="Equipamiento">
  </div>



    
  </div>

  <div class="form-group">
    <label for="asesor">Tipo de precio</label>
    <select  name="precio">
      @foreach($tipoprecios as $precio)
         <option value="{{$precio->Id_asesor}}">{{$precio->Nombre}}</option>
        @endforeach
       </select>
    </div>

    <div class="form-group">
    <label for="asesor">Modelo</label>
    <select  name="Activo">
      @foreach($modelos as $modelo)
         <option value="{{$modelo->Id_modelo}}">{{$modelo->Modelo}}</option>
        @endforeach
       </select>
    </div>

    <div class="form-group">
    <label for="asesor">Colonia</label>
    <select  name="Activo">
      @foreach($colonias as $col)
         <option value="{{$col->Id_colonia}}">{{$col->Colonia}}</option>
        @endforeach
       </select>
     </div>

  <button type="submit" class="btn btn-primary">Registrar</button>
   <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
</div>
</div>

@endsection