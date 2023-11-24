@extends('layouts.main')

@section('content')

    <h1>I Fumetti</h1>

    <div class="row row-cols-4">
        @foreach ($comics as $comic)

        <div class="col my-4">
            <div class="card" style="width: 18rem; height: 630px">
                <img src="{{ $comic->thumb }}" class="card-img-top object-fit-cover " alt="..." style="height: 440px">
                <div class="card-body d-flex flex-column justify-content-between ">
                    <span class="card-title fw-bold"> {{ strtoupper($comic->title) }}</span>
                    <p class="card-text">{{ $comic->series }}</p>
                    <div class="d-flex justify-content-around ">
                        <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">Edit</a>
                        @include('partials.buttonDelate')
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

@endsection
