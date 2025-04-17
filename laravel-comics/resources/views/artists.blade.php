@php
    $comics = config('comics');
@endphp

@extends("layouts.master")

@section("content")


<ul class="container my-5">
<h1 class="text-white text-uppercase mb-4">Artisti per ogni fumetto</h1>

    @foreach ($comics as $comic)
        <li class="text-white">
            <strong>{{ $comic["title"] }}:</strong>
            <div>{{ implode(', ', $comic["artists"]) }}</div>
        </li>
    @endforeach
</ul>

@endsection