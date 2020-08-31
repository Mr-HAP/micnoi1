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
                        <div class="form-row col-4 col-form-label">
                            <label for="photo"><h4>Modifica tu imagen/Flyer</h4></label>
                        </div>
                    </div>
                    @for($i = 0; $i < 3; $i++)
                    <div class="form-row">
                        <div class="input-group col-5 col-form-label">
                            <div>
                                <label class="">Seleccionar archivo
                                    <input type="file" class="form-control-file" name="images[]">
                                </label>
                            </div>
                        </div>
                    </div>
                    @endfor
                    <div class="form-row">
                        <small id="fileHelp" class="alert alert-info">Por favor cargue un archivo de imagen. El tamaño de la imagen no debe ser mayor a 2MB.</small>
                    </div>
                    <div class="form-row">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-left">Imagen</th>
                                        <th class="text-left">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($offer->images as $image)
                                    <tr>
                                        <td class="col-4 text-left">
                                            <img class="img-thumbnail" alt="Offer Image" src="/storage/img-offer/{{ $image->image }}" width="150" />
                                        </td>
                                        <td class="text-left">
                                            <label class="btn btn-secondary active">
                                                <input type="checkbox" autocomplete="off" name="delete-images[]" value="{{$image->id}}"> Eliminar
                                            </label>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                    <a type="button" href="/my-offers" class="btn btn-danger mb-2 ml-5">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
