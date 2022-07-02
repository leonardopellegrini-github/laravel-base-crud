@extends('layouts.main')

@section('content')

  <div class="container">
    @dump($Comic)
    <h1 class="text-center">{{ $Comic->title }}</h1>
    <img src="{{ $Comic->image }}" alt="{{ $Comic->title }}">
    <h3>{{ $Comic->type }}</h3>
  </div>

@endsection