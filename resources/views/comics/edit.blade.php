@extends('layouts.main')

@section('content')

<h1>Edit Comic</h1>
<form action="{{ route('comics.update', $comic) }}" method="POST" class="row g-3">
    @csrf
    @method('PUT')
    <div class="col-md-7">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
    </div>
    <div class="col-md-5">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
    </div>
    <div class="col-12">
      <label for="thumb" class="form-label">Image URL</label>
      <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
    </div>
    <div class="col-12">
      <label for="artists" class="form-label">Artists</label>
      <input type="text" class="form-control" id="artists" placeholder="If more than one separate them with ," name="artists"  value="{{ $comic->artists }}">
    </div>
    <div class="col-12">
      <label for="writers" class="form-label">Writers</label>
      <input type="text" class="form-control" id="writers" placeholder="If more than one separate them with ," name="writers" value="{{ $comic->writers }}">
    </div>
    <div class="col-md-6">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" class="form-control" id="sale_date" placeholder="Year-month-day" name="sale_date" value="{{ $comic->sale_date }}">
    </div>
    <div class="col-md-4">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
    </div>
    <div class="col-md-2">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price"  value="{{ $comic->price }}">
    </div>
    <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description"  value="{{ $comic->description }}">
    </div>
    <div class="col-12 mt-3">
      <button type="submit" class="btn btn-primary">Edit Comic</button>
      <a hfref="{{ route('comics.show', $comic->id) }}" class="btn btn-secondary">Annulla</a>
    </div>
  </form>


@endsection
