@extends('layouts.main')

@section('content')

    <h1>I Fumetti</h1>

    <div class="row">
        @foreach ($comics as $comic)

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                    <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

@endsection
