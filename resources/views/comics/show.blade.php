
@extends('layout.main')

@section('content')

<div class="container">
    <h1 class="text-center mb-5">{{$comic->title}}</h1>
    <div class="d-flex">
        <div>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="me-5" style="width: 400px">
        </div>
        <div>
            <p><strong>{{ $comic->type }}</strong></p>
            <p>{{ $comic->description }}</p>
            <p><strong>Artists:</strong>  {{ implode(', ', json_decode($comic->artists)) }}</p>
            <p><strong>Writers:</strong> {{ implode(', ', json_decode($comic->writers)) }}</p>
            <h3>Prezzo: {{ $comic->price }}</h3>
        </div>
    </div>
</div>


@endsection
