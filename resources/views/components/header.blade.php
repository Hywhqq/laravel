<!-- Header -->
<header id="header">
    <h1><a href="{{ route('home') }}">9 MAYA PRAZDNIK</a></h1>
    <nav class="links">
        <ul>
            <li><a href="{{ route('home') }}" style="color:black">Главная</a></li>

            @guest
                <li><a href="{{ route('signup') }}" style="color:black">Регистрация</a></li>
                <li><a href="{{ route('signin') }}" style="color:black">Авторизация</a></li>
            @endguest

            @auth
                <li><a href="">{{ Auth::user()->username }}</a></li>
                <li><a href="{{ route('auth.logout') }}">Выход</a></li>
            @endauth
        </ul>
    </nav>
</header>

