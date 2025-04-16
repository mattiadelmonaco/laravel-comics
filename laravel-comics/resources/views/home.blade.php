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
            <a href="#" class="comics__button">LOAD MORE</a>
        </section>

        {{-- PRODUCTS --}}
        <section class="products py-4">
            <ul class="container d-flex justify-content-center flex-wrap gap-5 my-0">
                <li class="d-flex gap-3 align-items-center text-white">
                    <img src="{{Vite::asset("resources/img/buy-comics-digital-comics.png")}}" alt="immagine fumetti digitali" width="50">
                    <h6 class="m-0 fw-bold">DIGITAL COMICS</h6>
                </li>
                <li class="d-flex gap-3 align-items-center text-white">
                    <img src="{{Vite::asset("resources/img/buy-comics-merchandise.png")}}" alt="immagine merchandise" width="50">
                    <h6 class="m-0 fw-bold">DC MERCHANDISE</h6>
                </li>
                <li class="d-flex gap-3 align-items-center text-white">
                    <img src="{{Vite::asset("resources/img/buy-comics-subscriptions.png")}}" alt="immagine abbonamento" width="50">
                    <h6 class="m-0 fw-bold">SUBSCRIPTION</h6>
                </li>
                <li class="d-flex gap-3 align-items-center text-white">
                    <img src="{{Vite::asset("resources/img/buy-comics-shop-locator.png")}}" alt="immagine negozi fisici" width="50">
                    <h6 class="m-0 fw-bold">COMIC SHOP LOCATOR</h6>
                </li>
                <li class="d-flex gap-3 align-items-center text-white">
                    <img src="{{Vite::asset("resources/img/buy-dc-power-visa.svg")}}" alt="immagine carta visa dc" width="50">
                    <h6 class="m-0 fw-bold">DC POWER VISA</h6>
                </li>
            </ul>
        </section>
    </main>
@endsection

