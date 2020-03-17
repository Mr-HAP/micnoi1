@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row mb-2">
            <div class="col title-musicxs text-center">
                <h2 class=""><span class="accentColor">O</span>FERTAS</h2>
            </div>
        </div>
        <div class="row box1 mb-2">
            <div class="col-12 text-center pt-5">
                <h2><span class="accentColor">EDITA </span> tu AVISO</h2>
            </div>

            <form role="form" class="col-12" method="post" action="{{$action}}" enctype="multipart/form-data">

                {{ csrf_field() }}
                <div class="col-12 text-center p-3">
                    <div class="form-group row">
                        <label for="type" class="col-sm-3 col-form-label"><h4>Tipo de Aviso</h4></label>
                        <select id="type" name="type" class="col-9 form-control">
                            <option {{ $offer->type === "request" ? "selected" : "" }} value="request">Ofrezco un Lugar</option>
                            <option {{ $offer->type === "offer" ? "selected" : "" }} value="offer">Busco un Lugar</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><h4>Titulo</h4></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Titulo del aviso" value="{{$offer->title}}">
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
                                <option>Choose State...</option>
                                @foreach($states as $state)
                                    <option {{ $offer->state_id == $state->state_id ? "selected" : "" }} value="{{$state->state_id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="description" class="col-sm-3 col-form-label"><h4>Aviso</h4></label>
                        <div class="col-sm-9">
                            <textarea placeholder="Aviso... " class="form-control" id="description" name="description"rows="3" maxlength="299">{{$offer->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <label for="photo" class="col-4 col-form-label"><h4>Modifica tu imagen/Flyer</h4></label>
                        <input type="file" class="col-4 form-control-file" name="photo">
                        @if(isset($offer->photo))
                            <div class="col-4">
                                <img class="img-thumbnail" alt="Offer Image" src="/storage/img-offer/{{$offer->photo}}" width="150" />
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary mb-2">Modificar</button>
                </div>
            </form>
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
