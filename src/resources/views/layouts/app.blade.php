<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Micnoi') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="container-fluid">
<div id="app">
    <header>
{{--        <div class="nav justify-content-end">--}}
{{--            <nav>--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    <a class="btn btn-xl accentColor" href="{{ route('login') }}" data-toggle="modal" data-target="#loginModal" data-whatever="@mdo">{{ __('Login') }}</a>--}}
{{--                    <a class="btn btn-xl accentColor" href="{{ route('register') }}" data-whatever="@mdo">{{ __('Register') }}</a>--}}

{{--                @else--}}
{{--                    <a href="#" class="dropdown-toggle accentColor" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">--}}
{{--                        {{ Auth::user()->name }}--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-top" aria-labelledby="dropdownMenuOffset">--}}
{{--                        <a class="dropdown-item" href="/my-profile">My Perfil</a>--}}
{{--                        <a class="dropdown-item" href="/my-offers">Mis Avisos</a>--}}
{{--                        <a class="dropdown-item" href="/my-bands">My Bands/Musicxs</a>--}}
{{--                    </div>--}}
{{--                    <a class="ml-3 text-dark" href="{{ route('logout') }}"--}}
{{--                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                        {{ __('Logout') }}--}}
{{--                    </a>--}}
{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                @endguest--}}
{{--            </nav>--}}
{{--        </div>--}}
        <div id="app-new">

        </div>
    </header>
    <div class="container">
        <main class="row py-4">
            <div class="col col-12">
                @yield('content')
            </div>
        </main>
    </div>
</div>
</body>
</html>
