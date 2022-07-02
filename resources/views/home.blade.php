
@extends('layouts.main')

@section('content')

<div class="container text-center">

  <h1>Benvenuto in DC Comics</h1>

  
  <div class="card-group">
    @foreach ($Comics as $Comic)
    <div class="col-2">
      <img class="card-img-top" src="{{ $Comic->image }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ $Comic->title }}</h5>
        <p class="card-text btn-block">{{ $Comic->type }}</p>
        <a href="{{ route('Comics.show', $Comic) }}" class="btn btn-primary btn-block m-3">Show</a>
        <a href="#" class="btn btn-success btn-block m-3">Edit</a>
        <a href="#" class="btn btn-danger btn-block m-3">Delete</a>
      </div>
    </div>

    @endforeach

  </div>


</div>

    
@endsection
