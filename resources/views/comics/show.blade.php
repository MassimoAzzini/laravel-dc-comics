@extends('layouts.main')

@section('content')


<div class="row">
    <div class="col-4">
        <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>
    <div class="col-6">

        <h3 class="fw-bold">{{ $comic->title }}</h3>
        <div><strong>Series:</strong>{{ $comic->series }}</div>
        <div><strong>Sale data:</strong>{{ $comic->sale_date }}</div>
        <div><strong>Type:</strong>{{ $comic->type }}</div>
        <div><strong>Artists:</strong>{{ $comic->artists }}</div>
        <div><strong>Writers:</strong>{{ $comic->writers }}</div>
        <span><strong>Desciption:</strong></span>
        <p>{{ $comic->description }}</p>

    </div>
</div>


@endsection
