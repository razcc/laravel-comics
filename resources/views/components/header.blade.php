<header>
    {{-- Logo --}}
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/dc-logo.png') }}" alt="Logo">
        </a>

    </div>

    {{-- Navbar --}}
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="{{ route('comics') }}">Comics</a></li>
            <li><a href="#">Movies</a></li>
            <li><a href="#">tv</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="#">Collectibles</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Fans</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Shop</a></li>
        </ul>
    </nav>

    {{-- Search --}}
    <div class="search">
        <input type="text" placeholder="Search">
    </div>
</header>
