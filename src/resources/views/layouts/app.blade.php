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
        <div class="nav justify-content-end">
            <nav>
                <!-- Authentication Links -->
                @guest
                    <a class="btn btn-xl accentColor" href="{{ route('login') }}" data-toggle="modal" data-target="#loginModal" data-whatever="@mdo">{{ __('Login') }}</a>
                    <a class="btn btn-xl accentColor" href="{{ route('register') }}" data-whatever="@mdo">{{ __('Register') }}</a>
                    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Login') }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    <div class="modal-body">

                                        @csrf

                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                       name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                       name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }} >>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="#" class="dropdown-toggle accentColor" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-top" aria-labelledby="dropdownMenuOffset">
                        <a class="dropdown-item" href="/my-profile">My Perfil</a>
                        <a class="dropdown-item" href="/my-offers">Mis Avisos</a>
                        <a class="dropdown-item" href="/my-bands">My Bands/Musicxs</a>
                    </div>
                    <a class="ml-3 text-dark" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </nav>
        </div>
        <div id="cabecera" class="row">
                <top-menu-component></top-menu-component>
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
