@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-2 text-center">
            <h1 class="exp-txt30 title-content">Avisos</h1>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-locales" role="tabpanel" aria-labelledby="nav-locales-tab">

{{--                Nav tabs--}}
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="/offer-list" class="nav-link {{ @$allOffers ? 'active' : ''}}" aria-controls="all-offers">
                            Todos los avisos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/my-offers" class="nav-link {{ @$myOffers ? 'active' : ''}}" aria-controls="my-offers">
                            Mis avisos
                        </a>
                    </li>
                </ul>

{{--                Tab panes--}}
                @if (@$allOffers)
                <div class="tab-content tab-pane active" role="tabpanel" id="all-offers">
                    @include('offer.list-tab')
                </div>
                @endif
                @if (@$myOffers)
                <div class="tab-content tab-pane active" role="tabpanel" id="my-offers">
                    @include('offer.list-tab')
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
