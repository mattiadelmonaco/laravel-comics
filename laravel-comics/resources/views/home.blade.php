@php

    $comics = config('comics');
   // dd($comics); 
@endphp

@extends("layouts.master")

@section("content")
    <main>
        <!-- JUMBOTRON -->
        <section class="jumbotron">
            <div class="jumbotron__img">
                <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="copertina DC">
            </div>        
        </section>

        <!-- COMICS -->
        <section class="container">
            <h2 class="ms-badge">CURRENT SERIES</h2>
            <ul class="ms-comics-list">
                @foreach ($comics as $comic)
                    <li>
                        <x-card>
                            <x-slot:image>
                                    {{$comic["thumb"]}}
                            </x-slot:image>
                            <x-slot:title>{{$comic["series"]}}</x-slot:title>
                        </x-card>
                    </li>
                @endforeach
            </ul>
            <a class="comics__button">LOAD MORE</a>
        </section>
    </main>
@endsection

