@extends('layouts.main')

@section('content')
<div class="container d-flex sc-container flex-column">
  <h1 class="mt-5 mb-3">Modifica Fumetto Esistente</h1>
  <h3>Stai modificando: {{$Comics->title}}</h3>

  <div class="w-50">
      <form action="{{ route('Comics.edit', $Comics)}}" method="POST">
          
          @csrf
          
          <div class="mb-3">
              <label for="name" class="form-label sc-label">Nome fumetto</label>
             
              <input type="text" id="name" name="title" class="form-control" value="{{$Comics->title}}">
          </div>
          <div class="mb-3">
              <label for="type" class="form-label">Tipologia</label>
              <input type="text" id="type" name="type" class="form-control" value="{{$Comics->type}}" >
          </div>
          <div class="mb-3">
              <label for="image" class="form-label">URL immagine</label>
              <input type="text" id="image" name="image" class="form-control" value="{{$Comics->image}}" >
          </div>

          <button type="submit" class="btn btn-primary">Invia</button>
      </form>
  </div>

</div>
@endsection