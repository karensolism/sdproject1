@extends ('layouts.app')

@section ('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$estado-> Activo}}</h1>
    <p class="lead">{{$estado -> Estado}}</p>
  </div>
</div>


@endsection