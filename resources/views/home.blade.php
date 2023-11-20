@extends("layouts.main")

@section("content")

    <h1>Home</h1>

    <div class="container d-flex flex-wrap">
        @foreach ($pizze as $pizza)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">{{ $pizza->name }}</p>
                    <p class="card-text">{{ $pizza->price }}</p>
                    <p class="card-text">{{ $pizza->ingredients }}</p>
                    <a href="{{ route("detail", ["id" => $pizza->id]) }}" class="btn btn-primary">Dettaglio</a>
                </div>
            </div>
        @endforeach

    </div>

@endsection
