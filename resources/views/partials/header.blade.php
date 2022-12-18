<header class="text-center">
    <img class="mb-3" src="{{Vite::asset('resources/img/marchio-sito-test.png')}}" alt="">
    <nav class="nav justify-content-center">
        <a class="nav-link {{Route::CurrentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}"
            aria-current="page">Home</a>
        <a class="nav-link {{Route::CurrentRouteName() === 'products' ? 'active' : '' }}"
            href="{{route('products')}}">Prodotti</a>
        <a class="nav-link" href="#">News</a>
    </nav>
</header>