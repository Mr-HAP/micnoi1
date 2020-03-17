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
                <h2>Paso  <span class="accentColor">1</span></h2>
                <p>Selecciona  si <b>ofreces un lugar para tocar</b> o si <b>buscas un lugar para tocar</b> como Banda o Solista</p>
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
                <form action="/createoffer1" method="POST" >
                    @csrf
                    <div class="form-group col-10 offset-1 col-sm-10">
                        <select id="type" name="type" class="form-control">
                            <option {{ session()->get('offer.type') === "request" ? "selected" : "" }} value="request">Ofrezco un Lugar</option>
                            <option {{ session()->get('offer.type') === "offer" ? "selected" : "" }} value="offer">Busco un Lugar</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Continue</button>
                </form>
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
