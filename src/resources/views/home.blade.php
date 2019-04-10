@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="video col p-0">
                <div class="overlay"></div>
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
                </video>
                <div class="container-video h-100">
                    <div class="d-flex h-100 text-center align-items-center">
                        <div class="w-100 text-white">
                            <h1 class="display-3">MICNOI VIDEO</h1>
                            <p class="lead mb-0">Ver video de la semana</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col title-musicxs text-center">
                <h2 class="exp-txt30"><span class="accentColor">M</span>USIXS</h2>
            </div>
        </div>
        <div class="row box1 mb-2 py-4">
            <div class="col text-center">
                <h3><span class="accentColor">MUSICXS</span> LOCALES</h3>
                <h4 class="exp-txt10">QUE OFRECEN</h4>
                <div class="navbar-nav exp-txt10">
                    <div class="nav-item">
                        ALOJAMIENTO
                    </div>
                    <div class="nav-item">
                        AMPLIFICACION
                    </div>
                    <div class="nav-item">
                        TOCATAS
                    </div>
                    <div class="nav-item">
                        GIRAS
                    </div>
                </div>
            </div>
            <div class="col text-center p-2">
                <h2><span class="accentColor">MUSICXS</span> INVITADOS</h2>
                <h3 class="exp-txt10">QUE BUSCAN</h3>
                <div class="navbar-nav exp-txt10">
                    <div class="nav-item">
                        ALOJAMIENTO
                    </div>
                    <div class="nav-item">
                        AMPLIFICACION
                    </div>
                    <div class="nav-item">
                        TOCATAS
                    </div>
                    <div class="nav-item">
                        GIRAS
                    </div>
                </div>
            </div>
        </div>
        <div class="row box1 mb-2 py-5">
            <div class="col mx-auto exp-txt10">
                <h2> MUSICXS EN EL<br><span class="accentColor">MAPA MICNOI</span>
                </h2>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col title-fans text-center exp-txt30">
                <h2><span class="accentColor">F</span>ANS</h2>
            </div>
        </div>
        <div class="row box1 mb-2 py-5">
            <div class="col text-center">
                <h3><span class="accentColor">GPS</span> MICNOI</h3>
                <h4>SAL DE CASA Y DESCUBRE</h4>
                <span>MUSICA EN VIVO</span>
                <span>EN TIEMPO REAL</span>
            </div>
            <div class="col text-center">
                <h3 class="accentColor">AMIGXS</h3>
                <h4>CONOCE NUEVAS AMISTADES</h4>
                <span>PARA IR A VER A TUS</span>
                <span>ARTISTAS FAVORITOS</span>
            </div>
        </div>
        <div class="row box1 mb-2 py-5">
            <div class="col text-center">
                <h2>PLAYLIST <span class="accentColor"> MICNOI</span></h2>
                <h3>CADA SEMANA</h3>
                <h3>NUEVA MUSICA</h3>
            </div>
        </div>
        <div class="row box2 mb-2 py-5">
            <div class="col text-center p-2">
                <img src="img/youtube.png" height="120px">

            </div>
            <div class="col text-center p-2">
                <img src="img/spotify.png" height="120px">
            </div>
        </div>

        <div class="row box1 mb-2">
            <div class="col text-center exp-txt30 p-5">
                <h2>VIDEOS</h2>
            </div>
        </div>
    </div>
@endsection

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
