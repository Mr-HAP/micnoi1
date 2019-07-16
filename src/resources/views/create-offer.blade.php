@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row mb-2">
            <div class="col title-musicxs text-center">
                <h2 class=""><span class="accentColor">C</span>REA UN AVISO PARA LA COMUNIDAD</h2>
            </div>
        </div>
        <div class="row box1 mb-2">
            <div class="col-12 text-center pt-5">
                <h2>SUBE TU <span class="accentColor">AVISO</span> COMO MUSICO</h2>
                <div class="form-group row">
                    <div class="form-group col-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="local" value="local">
                            <label class="form-check-label" for="local"><h2>LOCAL</h2></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="invitado" value="invitado">
                            <label class="form-check-label" for="invitado"><h2>INVITADO</h2></label>
                        </div>
                    </div>
                </div>
            </div>
            <form role="form" class="col-12" method="post" action="{{action('OfferController@update', $offer->offer_id)}}">

                {{ csrf_field() }}
                <div class="col-12 text-center p-3">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><h4>Titulo</h4></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Titulo del aviso" value="{{$offer->title}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="description" class="col-sm-3 col-form-label"><h4>Aviso</h4></label>
                        <div class="col-sm-9">
                        <textarea placeholder="Aviso... " class="form-control" id="description" name="description"rows="3">
                            {{$offer->description}}
                        </textarea>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <label for="photo" class="col-sm-4 col-form-label"><h4>Adjunta una imagen/Flyer</h4></label>
                        <input type="file" class="col-sm-8 form-control-file" id="photo" name="photo" value="/">
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary mb-2">Publicar</button>
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
