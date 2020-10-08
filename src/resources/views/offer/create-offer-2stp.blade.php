@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row mb-2">
            <div class="col title-musicxs text-center">
                <h2 class=""><span class="accentColor">C</span>REA UN AVISO PARA LA COMUNIDAD</h2>
            </div>
        </div>
        <div class="row box1 mb-2">
            <div class="col-12 text-center">
                <h2>Paso  <span class="accentColor">2</span></h2>
                <p>Crea un Titulo atractivo para tu anuncio, ademas debes seleccionar el pais y region que te interesa y por último debes agregar una descripción que explique lo que buscas/ofreces.</p>

                <div>
                    <p>Creando aviso tipo: {{ session()->get('typeDescription') }}</p>
                </div>
            </div>

            <div class="col-12 text-center p-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/createoffer2" method="POST" >
                    @csrf
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><h4>Titulo</h4></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Titulo del aviso" value="{{ session()->get('offer.title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="country" class="col-sm-3 col-form-label"><h4>Lugar</h4></label>
                        <div class="form-group col-md-4">
                            <select id="country" name="country" class="form-control">
                                <option selected value="1">Chile</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <select id="state_id" name="state_id" class="form-control">
                                <option>Selecciona Region...</option>

                                @foreach($states as $state)
                                    <option {{ (session()->get('offer.state_id')) == $state->state_id ? "selected" : "" }} value="{{$state->state_id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="description" class="col-sm-3 col-form-label"><h4>Aviso</h4></label>
                        <div class="col-sm-9">
                        <textarea placeholder="Aviso... " class="form-control" id="description" name="description"rows="3">
                            {{ session()->get('offer.description') }}
                        </textarea>
                        </div>
                    </div>
                    <a type="button" href="/createoffer1" class="btn btn-warning">Regresar</a>
                    <button type="submit" class="btn btn-primary">Siguiente</button>
                </form>
            </div>
        </div>
    </div>
@endsection
