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

            <div>
                <p>Creando aviso tipo: {{ session()->get('typeDescription') }}</p>
            </div>

            <div class="col-12 text-center p-3">
                <form action="/storeoffer" method="post" >
                    {{ csrf_field() }}
                    <table class="table">
                        <tr>
                            <td>Titulo:</td>
                            <td><strong>{{ $offer->title }}</strong></td>
                        </tr>
                        <tr>
                            <td>Lugar:</td>
                            <td><strong>{{ $states->where('state_id', $offer->state_id)->first()->name }}</strong></td>
                        </tr>
                        <tr>
                            <td>Tipo:</td>
                            <td><strong>{{ $offer->type }}</strong></td>
                        </tr>
                        <tr>
                            @if ($offer->host_gender)
                            <td>Idendidad de género anfitrión:</td>
                            <td><strong>{{ $offer->host_gender }}</strong></td>
                            @else
                                <td>Idendidad de género solicitante:</td>
                                <td><strong>{{ $offer->guest_gender }}</strong></td>
                            @endif
                        </tr>
                        <tr>
                            <td>Descripción:</td>
                            <td><strong>{{ $offer->description }}</strong></td>
                        </tr>
                        <tr>
                            <td>Imagenes:</td>
                            <td>
                            @foreach(session()->get('images') as $image)
                                <strong><img class="img-thumbnail figure-img" width="150" alt="Product Image" src="/storage/img-offer/{{ $image }}"/></strong>
                                    <input type="hidden" name="images[]" value="{{ $image }}">
                            @endforeach
                            </td>
                        </tr>
                    </table>
                    <a type="button" href="/createoffer1" class="btn btn-warning">Regresar a paso 1</a>
                    <a type="button" href="/createoffer2" class="btn btn-warning">Regresar a paso 2</a>
                    <a type="button" href="/createoffer3" class="btn btn-warning">Regresar a paso 3</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
