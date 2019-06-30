@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-2 text-center">
            <h1 class="exp-txt30 title-content">MUSICXS</h1>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-locales" role="tabpanel" aria-labelledby="nav-locales-tab">
                <div class="row box1 mb-2 py-5">
                    <div class="col text-center">
                        <h3><span class="accentColor">LISTADO</span> MUSICOS Y BANDAS  </h3>
                        <hr>
                        <span>Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza,
                    le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son
                    señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien
                    sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca</span>
                    </div>
                </div>
                <div class="row box1 my-2">
                    <div class="card-group">
                        @foreach($musicians as $musician)
                        <div class="card">
                            <img class="card-img-top" src="{{$musician->photo}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$musician->name}}</h5>
                                <p class="card-text">
                                    <ul>
                                        <li>Country: {{$musician->country}}</li>
                                        <li>City: {{$musician->city}}, {{$musician->region}}</li>
                                    </ul>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
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
