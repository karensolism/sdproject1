@extends ('layouts.app')

@section ('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6"> 

<form action="{{route('usuarios.store')}}" method="POST">
{{csrf_field()}}

<script src="./path/to/dropzone.js"></script>

<div class="form-group">
    <label for="name">Activo</label>
    <select id="activoDesarrolladora" name="Activo">
         <option value="1">SI</option>
         <option value="0">NO</option>
       </select>
    
  </div>
  
<form action="upload" class="dropzone" id="upload" enctype="multipart/form-data">
      <input type="file" name="Foto[]" multiple><br/>
      </form>
    
  <button type="submit" class="btn btn-primary">Registrar</button>
   <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
</div>
</div>

@endsection