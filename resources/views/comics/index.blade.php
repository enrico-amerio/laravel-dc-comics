
@extends('layout.main')

@section('content')

<div class="container d-flex flex-wrap pt-5 pb-5 ">
    @foreach ($comics as $comic )
    <div class="card m-3" style="width: 18rem;">
        <img src="{{$comic->thumb}}" class="card-img-top img-fluid object-fit-cover " alt="{{$comic->title}}" style="height: 400px">
        <div class="card-body">
          <h5 class="card-title" style="height: 40px">{{$comic->title}}</h5>
          <p class="card-text" style="height: 40px">{{$comic->series}}</p>
          <p class="card-text" style="height: 40px">{{$comic->price}}</p>
          <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary" >Details</a>
          <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary" >Edit</a>
        </div>
      </div>
      @endforeach
</div>


@endsection
