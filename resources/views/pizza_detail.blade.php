@extends("layouts.main")

@section("content")

    <h1>{{ $pizza->name }}</h1>

    <div class="container d-flex flex-wrap">

            <div class="card" style="width: 18rem;">
                <img src="{{ $pizza->image }}" class="card-img-top" alt="{{$pizza->name}}">
                <div class="card-body">
                    <p class="card-text">{{ $pizza->name }}</p>
                    <p class="card-text">{{ $pizza->price }}</p>
                    <p class="card-text">{{ $pizza->ingredients }}</p>
                    <a href="" class="btn btn-primary">Dettaglio</a>
                </div>
            </div>

    </div>

@endsection
