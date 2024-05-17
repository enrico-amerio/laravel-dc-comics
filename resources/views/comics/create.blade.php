
@extends('layout.main')

@section('content')

<div class="container mt-5">
    <div class="row pt-5">
        <div class="col-10">
            <form action="{{ route('comics.store')}} " method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="thumb">URL Image</label>
                    <input type="text"  name="thumb" class="form-control" id="thumb" placeholder="Enter URL Image">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter description"></textarea>
                    </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" name="series" class="form-control" id="series" placeholder="Enter series">
                </div>
                <div class="form-group">
                    <label for="sale_date">Sale Date</label>
                    <input type="date" name="sale_date" class="form-control" id="sale_date" placeholder="Enter sale_date">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="Enter type">
                </div>
                <div class="form-group">
                  <label for="artists">Artists</label>
                  <input type="text" name="artists" class="form-control" id="artists" placeholder="Enter artists">
                </div>
                <div class="form-group">
                  <label for="writers">Writers</label>
                  <input type="text" name="writers" class="form-control" id="writers" placeholder="Enter writers">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
