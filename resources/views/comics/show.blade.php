
@extends('layout.main')

@section('content')

<div class="container mt-5 ">
    <h1 class="text-center pt-5 mb-5">{{$comic->title}}</h1>
    <div class="d-flex">
        <div>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="me-5" style="width: 300px">
        </div>
        <div>
            <p><strong>{{ $comic->type }}</strong></p>
            <p>{{ $comic->description }}</p>
            <p><strong>Artists:</strong>  {{ implode(', ', json_decode($comic->artists)) }}</p>
            <p><strong>Writers:</strong> {{ implode(', ', json_decode($comic->writers)) }}</p>
            <h3>Prezzo: {{ $comic->price }}</h3>
            <div>
              <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning" ><i class="fa-solid fa-pen"></i></a>
              <form action="{{route('comics.destroy', $comic)}}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di voler eliminare {{ $comic->title }}?')">
                @csrf
                @method('DELETE')
                <button type="submit"class="btn btn-danger" ><i class="fa-solid fa-trash"></i></button>
              </form>
            </div>
        </div>
    </div>
</div>


@endsection
