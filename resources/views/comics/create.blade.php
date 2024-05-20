
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
            <form action="{{ route('comics.store')}} " method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter title" value="{{ old('title') }}">
                  @error('title')
                  <small class="text-danger ">
                    {{ $message }}
                  </small>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="thumb">URL Image</label>
                    <input type="text"  name="thumb" class="form-control @error('thumb') is-invalid @enderror" id="thumb" placeholder="Enter URL Image" value="{{ old('thumb') }}">
                    @error('thumb')
                    <small class="text-danger ">
                      {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Enter description" value="{{ old('description') }}"></textarea>
                    @error('description')
                    <small class="text-danger ">
                      {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Enter price" value="{{ old('price') }}">
                    @error('price')
                    <small class="text-danger ">
                      {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" name="series" class="form-control @error('series') is-invalid @enderror" id="series" placeholder="Enter series" value="{{ old('series') }}">
                    @error('series')
                    <small class="text-danger ">
                      {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sale_date">Sale Date</label>
                    <input type="date" name="sale_date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" placeholder="Enter sale date" value="{{ old('sale_date') }}">
                    @error('sale_date')
                    <small class="text-danger ">
                      {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Enter type" value="{{ old('type') }}">
                    @error('type')
                    <small class="text-danger ">
                      {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="artists">Artists</label>
                  <input type="text" name="artists" class="form-control @error('artists') is-invalid @enderror" id="artists" placeholder="Enter artists" value="{{ old('artists') }}">
                  @error('artists')
                  <small class="text-danger ">
                    {{ $message }}
                  </small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="writers">Writers</label>
                  <input type="text" name="writers" class="form-control @error('writers') is-invalid @enderror" id="writers" placeholder="Enter writers" value="{{ old('writers') }}">
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
