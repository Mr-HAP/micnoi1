@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-2 text-center">
            <h1 class="exp-txt30 title-content">OFFERS</h1>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-locales" role="tabpanel" aria-labelledby="nav-locales-tab">
                <div class="row box1 mb-2 py-5">
                    <div class="col text-center">
                        <h3>MUSICIAN & BANDS <span class="accentColor">OFFERS</span></h3>
                        <hr>
                        <form role="form" class="col-12" method="get" action="{{$action}}" >
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <select id="country" name="country" class="form-control">
                                        <option selected value="1">Chile</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <select id="inputState" name="state" class="form-control">
                                        <option selected>Choose State...</option>
                                        @foreach($states as $state)
                                            <option value="{{$state->state_id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="btn btn-success btn-lg" type="submit" value="Search">
                                </div>
                            </div>
                        </form>
                        @auth()
                            <a href="/create-offer" class="btn btn-success"> + Create Offer</a>
                        @endauth
                    </div>
                </div>
                <div class="row box1 my-2">
                    <div class="card-columns">
                        @foreach($offers->sortByDesc('offer_id') as $offer)
                            @php
                                $stateOffer = $states->where('state_id', $offer->state_id)->pluck('name');
                            @endphp
                            <div class="card">
                                <img src="{{$offer->photo}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{$offer->title}}</h5>
                                    <p class="card-text">{{$offer->description}}</p>
                                    <p class="card-text"><small class="text-muted">{{$stateOffer[0]}}</small></p>
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
