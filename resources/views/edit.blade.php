@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="mb-3">Modifica di: {{ $Comic->title}}</h2>
                <form action="{{ route('Comic.update', $Comic) }}" method="POST">
                    {{-- @csrf deve essere inserito in tutti i form altrimenti il form non è valido --}}
                    @csrf
                    {{-- se il method è PUT|PATCH|DELETE nel tag form mettere method="POST" e aggiungere in @method in blade --}}
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        {{-- il name dell'input deve corrispondere al nome della colonna della tabella di riferimento --}}
                        <input type="text" id="name"
                            name="name"
                            value="{{ $Comic->title }}"
                            class="form-control" placeholder="Nome pasta">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Genere</label>
                        <input type="text" id="type"
                        name="type"
                        value="{{ $Comic->type }}"
                        class="form-control" placeholder="Genere" >
                    </div>
                    <div class="mb-3">
                        <img class="w-25" src="{{ $Comic->image }}" alt=""><br>
                        <label for="image" class="form-label">URL immagine</label>
                        <input type="text" id="image"
                        name="image"
                        value="{{ $Comic->image }}"
                        class="form-control" placeholder="URL immagine" >
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>

    </div>
@endsection