
@extends('layouts.main')

@section('content')

<div class="container text-center">

  @foreach ($Comics as $Comic)
      
  
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ $Comic->image }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $Comic->title }}</h5>
      <p class="card-text">{{ $Comic->type }}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  @endforeach

</div>

    
@endsection
