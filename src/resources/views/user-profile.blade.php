@extends('layouts.app')

@section('content')

    <div class="container py-4 my-2">
        <div class="row mb-2">
            <div class="col title-musicxs text-center">
                <h2 class="exp-txt30">Mi <span class="accentColor">PERFIL</span></h2>
            </div>
        </div>
        <div class="row box2">
            <div class="col-md-4 pr-md-5 p-3">
                <img class="w-100" src="{{$userdetails->photo}}" />
                <div class="pt-4 mt-2">
                    <section class="mb-4 pb-1">
                        <h3 class="h6 font-weight-light text-secondary text-uppercase">Información Personal</h3>
                        <div class="pt-2">
                            <div class="work mb-4">
                                <strong class="h5 d-block font-weight-bold mb-1 accentColor">Ubicación</strong>
                                <strong class="h6 d-block mb-1">Pais: {{$userdetails->country}}</strong>
                                <strong class="h6 d-block mb-1">Ciudad: {{$userdetails->city}}</strong>
                            </div>
                            <div class="work mb-4">
                                <strong class="h5 d-block font-weight-bold mb-1 accentColor">Redes Sociales</strong>
                                <strong class="h6 d-block mb-1">Facebook: {{$userdetails->facebook}}</strong>
                                <strong class="h6 d-block mb-1">Youtube: {{$userdetails->video}}</strong>
                                <strong class="h6 d-block mb-1">Instagram: {{$userdetails->instagram}}</strong>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-8 p-3">
                <div class="d-flex align-items-center">
                    <h2 class="font-weight-bold m-0">
                        <span class="accentColor">Hola,</span> {{$user->name}}
                    </h2>
                </div>
                <p class="h5 mt-2 d-block font-weight-light">
                    E-mail: {{$user->email}}
                </p>
                <p class="lead mt-4">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                <section class="container text-right">
                    <button class="btn btn-light mr-3 mb-3">
                        Editar Perfil
                    </button>
                    <button class="btn btn-light mr-3 mb-3">
                        Modificar Contraseña
                    </button>
                </section>

                <section class="mt-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                Mis Bandas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                Mis Ofertas
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-4" id="myTabContent">
                        <div class="tab-pane py-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-group">
                                @foreach($mybands as $band)
                                    <div class="card">
                                        <img class="card-img-top" src="{{$band->photo}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$band->name}}</h5>
                                            <p class="card-text">
                                            <ul>
                                                <li>Country: {{$band->country}}</li>
                                                <li>City: {{$band->city}}, {{$band->region}}</li>
                                            </ul>
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                            @if (Auth::user()->id == $band->id_admin_band)
                                                <a href="/band/{{$band->band_id}}" class="btn-lg btn-warning">Editar</a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="card-columns">
                                @foreach($myoffers->sortByDesc('offer_id') as $offer)
                                    <div class="card">
                                        <img src="{{$offer->photo}}" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$offer->title}}</h5>
                                            <p class="card-text">{{$offer->description}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
