<header class="bg-white">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="mx-1">
      <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC" width="90"></a>
    </div>
    <nav>
      <ul class=" d-flex flex-wrap list-unstyled gap-4 mx-2 py-5">
        <li><a href="{{ route('home') }}">COMICS LIST</a></li>
        <li><a href="{{ route('artists') }}">ARTISTS</a></li>
        <li><a href="{{ route('writers') }}">WRITERS</a></li>
        <li><a href="{{ route('under-construction')}}">GAMES</a></li>
        <li><a href="{{ route('under-construction')}}">COLLECTIBLES</a></li>
        <li><a href="{{ route('under-construction')}}">VIDEOS</a></li>
        <li><a href="{{ route('under-construction')}}">FANS</a></li>
        <li><a href="{{ route('under-construction')}}">NEWS</a></li>
        <li><a href="{{ route('under-construction')}}">SHOP</a></li>
      </ul>
    </nav>
  </div>
</header>
