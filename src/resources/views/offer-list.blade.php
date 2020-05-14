@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-2 text-center">
            <h1 class="exp-txt30 title-content">Avisos</h1>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-locales" role="tabpanel" aria-labelledby="nav-locales-tab">
                <div class="row box1 mb-2 py-5">
                    <div class="col text-center">
                        <h3><span class="accentColor">AVISOS</span> MUSICXS & BANDAS</h3>
                        <hr>
                        <form role="form" class="col-12" method="get" action="{{$action}}">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <select id="type" name="type" class="form-control">
                                        <option value="">Todos los Avisos</option>
                                        <option {{Request::get('type') == 'offer' ? 'selected' : ''}} value="offer">
                                            Ofreces un lugar para tocar
                                        </option>
                                        <option {{Request::get('type') == 'request' ? 'selected' : ''}} value="request">
                                            Buscas un lugar para tocar
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <select id="country" name="country" class="form-control">
                                        <option selected value="1">Chile</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <select id="inputState" name="state" class="form-control">
                                        <option selected value="">Todas las regiones...</option>
                                        @foreach($states as $state)
                                            <option
                                                {{Request::get('state') == $state->state_id ? 'selected' : ''}} value="{{$state->state_id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <input class="btn btn-success btn-lg" type="submit" value="Search">
                                </div>
                            </div>
                        </form>
                        @auth()
                            <a href="/createoffer1" class="btn btn-success"> + Crear Aviso</a>
                        @endauth
                    </div>
                </div>
                <div class="row box1 my-2">
                    @if ($offers->isEmpty())
                        <div class="col text-center">
                            <h4>No se encontraros Resultados</h4>
                        </div>
                    @endif
                    <div class="card-columns">
                        @foreach($offers as $offer)
                            @php $stateOffer = $states->where('state_id', $offer->state_id)->pluck('name'); @endphp
                            <div class="card">
{{--                           TODO: change to folder path when we begin storing imgages in our server
                                /storage/img-offer/--}}
                                <img src="{{$offer->photo}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{$offer->title}}</h5>
                                    <p class="card-text">{{$offer->description}}</p>
                                    <p class="card-text"><small class="text-muted">{{$stateOffer[0]}}</small></p>
                                </div>
                                @if (Auth::user() && Auth::user()->id == $offer->user_id)
                                <div class="card-footer">
                                    <a type="button" href="/offer/edit/{{$offer->offer_id}}" class="btn btn-success">Editar</a>
                                </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
