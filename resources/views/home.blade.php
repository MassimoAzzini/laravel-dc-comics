@extends('layouts.main')

@section('content')

    <h1>Home</h1>

    <div class="row">
        @foreach ($products as $product)

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ $product->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
