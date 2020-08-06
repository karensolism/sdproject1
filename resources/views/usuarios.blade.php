@extends ('layouts.app')

@section ('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($users as $users)
    <tr>
     
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection