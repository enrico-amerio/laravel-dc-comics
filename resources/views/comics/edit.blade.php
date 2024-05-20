
@extends('layout.main')

@section('content')

<div class="container mt-5">
    <div class="row pt-5">
        <div class="col-10">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach

                </div>
            @endif
            <form action="{{ route('comics.update', $comic)}} " method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="title" placeholder="Enter title" value="{{old('title', $comic->title)}}">
                  @error('title')
                  <small class="text-danger ">
                    {{ $message }}
                  </small>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="thumb">URL Image</label>
                    <input type="text"  name="thumb" class="form-control" id="thumb" placeholder="Enter URL Image"value="{{old('thumb', $comic->thumb)}}">
                    @error('thumb')
                  <small class="text-danger ">
                    {{ $message }}
                  </small>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter description">{{old('description', $comic->description)}}</textarea>
                    @error('description')
                  <small class="text-danger ">
                    {{ $message }}
                  </small>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Enter price" value="{{old('price',$comic->price)}}">
                    @error('price')
                    <small class="text-danger ">
                      {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" name="series" class="form-control" id="series" placeholder="Enter series" value="{{old('series',$comic->series)}}">
                    @error('series')
                    <small class="text-danger ">
                      {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sale_date">Sale Date</label>
                    <input type="date" name="sale_date" class="form-control" id="sale_date" placeholder="Enter sale_date" value="{{old('sale_date',$comic->sale_date)}}">
                    @error('sale_date')
                    <small class="text-danger ">
                      {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="Enter type" value="{{old('type',$comic->type)}}">
                    @error('type')
                    <small class="text-danger ">
                      {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="artists">Artists</label>
                  <input type="text" name="artists" class="form-control" id="artists" placeholder="Enter artists" value="{{ old('artists', implode(', ', json_decode($comic->artists))) }}">
                  @error('artists')
                  <small class="text-danger ">
                    {{ $message }}
                  </small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="writers">Writers</label>
                  <input type="text" name="writers" class="form-control" id="writers" placeholder="Enter writers" value="{{ old('writers',implode(', ', json_decode($comic->writers))) }}">
                  @error('writers')
                  <small class="text-danger ">
                    {{ $message }}
                  </small>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
