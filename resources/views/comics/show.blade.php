@extends('layouts.main')

@section('content')


<div class="row">
    <div class="col-4">
        <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>
    <div class="col-6">

        <h3 class="fw-bold">{{ $comic->title }}</h3>
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-column">
                <span><strong>Series:</strong>{{ $comic->series }}</span>
                <span><strong>Sale data:</strong>{{ $comic->sale_date }}</span>
                <span><strong>Type:</strong>{{ $comic->type }}</span>
            </div>
            <h2 class="fw-bold">{{ $comic->price }}</h2>
        </div>
        <div><strong>Artists:</strong>{{ $comic->artists }}</div>
        <div><strong>Writers:</strong>{{ $comic->writers }}</div>
        <span><strong>Desciption:</strong></span>
        <p>{{ $comic->description }}</p>
        <div class="d-flex mt-3">
            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning me-3">Edit</a>
            {{-- @include('partials.buttonDelate') --}}
            {{-- <form action="{{ route('comics.destroy', $comic) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete {{ $comic->title }}?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Delate
                </button>
            </form> --}}


            <form action="{{route('comics.destroy', $comic)}}" method="post" onsubmit="return confirm('Sicuro di voler eliminare questo Fumetto?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Elimina Fumetto
                </button>
            </form>


        </div>

    </div>
</div>


@endsection
