@extends ('layouts.app')

@section ('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$servicios->Id_servicio}}</h1>
    <p class="lead">{{$servicios->Servicio}}</p>
  </div>
</div>

@endsection