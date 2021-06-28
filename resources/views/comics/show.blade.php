@extends('layouts.card')

@section('content')
  <div class="card mt-5" style="width: 18rem; margin:auto; background-color:white;">
    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $comic->title }}</h5>
      <h6 class="card-title">{{ $comic->type }}</h6>
      <p class="card-text">{{ $comic->description}}</p>
      <a href="{{ route('comics.index')}}" class="btn btn-primary">Torna ai fumetti</a>
    </div>
  </div>
  
@endsection