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
                <h2>Casi terminas<span class="accentColor">!</span></h2>
                <p>Revisa la informacion y guarda.</p>
            </div>

            <div class="col-12 text-center p-3">
                <form action="/storeoffer" method="post" >
                    {{ csrf_field() }}
                    <table class="table">
                        <tr>
                            <td>Name:</td>
                            <td><strong>{{$offer->title}}</strong></td>
                        </tr>
                        <tr>
                            <td>State:</td>
                            <td><strong>{{ $states->where('state_id', $offer->state_id)->first()->name }}</strong></td>
                        </tr>
                        <tr>
                            <td>Type:</td>
                            <td><strong>{{$offer->type}}</strong></td>
                        </tr>
                        <tr>
                            <td>Description:</td>
                            <td><strong>{{$offer->description}}</strong></td>
                        </tr>
                        <tr>
                            <td>Image:</td>
                            <td><strong><img class="img-thumbnail figure-img" width="150" alt="Product Image" src="/storage/img-offer/{{$offer->photo}}"/></strong></td>
                        </tr>
                    </table>
                    <a type="button" href="/createoffer1" class="btn btn-warning">Back to Step 1</a>
                    <a type="button" href="/createoffer2" class="btn btn-warning">Back to Step 2</a>
                    <a type="button" href="/createoffer3" class="btn btn-warning">Back to Step 3</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
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
