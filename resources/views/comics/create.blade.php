@extends('layouts.main')

@section('content')

<h1>Add the details of the new comic</h1>
<form action="{{ route('comics.store') }}" method="POST" class="row g-3">
    @csrf
    <div class="col-md-7">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="col-md-5">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" name="series">
    </div>
    <div class="col-12">
      <label for="thumb" class="form-label">Image URL</label>
      <input type="text" class="form-control" id="thumb" name="thumb">
    </div>
    <div class="col-12">
      <label for="artists" class="form-label">Artists</label>
      <input type="text" class="form-control" id="artists" placeholder="If more than one separate them with ," name="artists">
    </div>
    <div class="col-12">
      <label for="writers" class="form-label">Writers</label>
      <input type="text" class="form-control" id="writers" placeholder="If more than one separate them with ," name="writers">
    </div>
    <div class="col-md-6">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" class="form-control" id="sale_date" placeholder="Year-month-day" name="sale_date">
    </div>
    <div class="col-md-4">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control" id="type" name="type">
    </div>
    <div class="col-md-2">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Add Comic</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>


@endsection
