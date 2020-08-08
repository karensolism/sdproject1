@extends ('layouts.app')

@section ('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$estados-> Activo}}</h1>
    <p class="lead">{{$estados -> Estado}}</p>
  </div>
</div>


@endsection