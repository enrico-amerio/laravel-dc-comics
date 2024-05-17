
@extends('layout.main')

@section('content')

@if (session('deleted'))
    <div class="alert alert-seccess pt-5 pb-5" role="alert">{{ session('deleted')}}</div>
@endif
<div class="container d-flex flex-wrap pt-5 pb-5 ">
    @foreach ($comics as $comic )
    <div class="card m-3" style="width: 18rem;">
        <img src="{{$comic->thumb}}" class="card-img-top img-fluid object-fit-cover " alt="{{$comic->title}}" style="height: 400px">
        <div class="card-body">
          <h5 class="card-title" style="height: 40px">{{$comic->title}}</h5>
          <p class="card-text" style="height: 40px">{{$comic->series}}</p>
          <p class="card-text" style="height: 40px">{{$comic->price}}</p>
          <a href="{{route('comics.show', $comic->id)}}" class="btn btn-success" ><i class="fa-solid fa-eye"></i></a>
          <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning" ><i class="fa-solid fa-pen"></i></a>
          <form action="{{route('comics.destroy', $comic)}}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit"class="btn btn-danger" ><i class="fa-solid fa-trash"></i></button>
          </form>
        </div>
      </div>
      @endforeach
</div>


@endsection
