@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-2 text-center">
            <h1 class="exp-txt30 title-content">Registro y Perfil</h1>
        </div>
        <div class="row mb-2">
            <div class="col title-musicxs text-center">
                <h2 class="exp-txt30"><span class="accentColor">M</span>USIXS</h2>
            </div>
        </div>
        <form role="form" method="post" action="{{action('MusicianController@update', $band->band_id)}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col mr-2">
                    <div class="row box1 mb-2 py-4">
                        <div class="col text-center">
                            <h3><span class="accentColor">NOMBRE</span> GRUPO/SOLISTA</h3>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Nombre"
                                           value="{{$band->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="inputState">Estilo</label>
                                <div class="col-sm-10">
                                    <select id="inputState" class="form-control">
                                        <option selected>Seleccione...</option>
                                        <option>Rock</option>
                                        <option>Pop</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Miembros" class="col-sm-2 col-form-label">Miembros</label>
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" name="members" placeholder="2"
                                           value="{{$band->members}}">
                                </div>
                                {{--<div class="form-group col-sm-5">
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="checkbox" id="Solista" value="Solista">
                                        <label class="form-check-label" for="Solista">Solista</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="Grupo" value="Grupo">
                                        <label class="form-check-label" for="Grupo">Grupo</label>
                                    </div>
                                </div>--}}
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Region</label>
                                    <input type="text" class="form-control" name="region" placeholder="metropolis"
                                           value="{{$band->region}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Ciudad</label>
                                    <input type="text" class="form-control" name="city" placeholder="Santiago"
                                           value="{{$band->city}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Pais</label>
                                    <input type="text" class="form-control" name="country" placeholder="Chile"
                                           value="{{$band->country}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row box1 mb-2 py-4">

                        <div class="col-12 text-center">
                            <h3>INSTRUMENTOS</h3>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Seleccione mas de uno presionando control</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <option>Trombon</option>
                                    <option>Bajo</option>
                                    <option>Bateria</option>
                                    <option>Guitarra Acustica</option>
                                    <option>Guitarra electrica</option>
                                    <option>Violin</option>
                                    <option>Zampoña</option>
                                    <option>Guiro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row box1 mb-2 py-4">

                        <div class="col-12 text-center">
                            <h3>TRAYECTORIA</h3>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm" name="songs_number"
                                           value="{{$band->songs_number}}" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Canciones</label>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm" name="eps" placeholder="2"
                                           value="{{$band->eps}}">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">EPS</label>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm" name="discs"
                                           value="{{$band->discs}}" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Discos</label>
                            </div>
                        </div>
                        <div class="col-sm-8 text-center">
                            <div class="form-row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="facebook"
                                           value="{{$band->facebook}}" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Facebook</label>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="instagram"
                                           value="{{$band->instagram}}" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Instagram</label>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="youtube"
                                           value="{{$band->youtube}}" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Youtube</label>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="concert"
                                           value="{{$band->concerts}}" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Conciertos</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col ml-2">
                    <div class="row box1 mb-2 pb-lg-5">
                        <div class="custom-file my-lg-5 py-lg-5 text-center">
                            <label class="hover-file" for="customFile">
                                <h2><span class="accentColor exp-txt20">SUBIR FOTO</span></h2>
                                <h3 class="exp-txt10">MUSICO O SOLISTA</h3>
                            </label>
                            <input type="file" hidden="hidden" class="" name="customFile">
                        </div>
                    </div>
                    <div class="row box1 mb-2 pb-lg-5">
                        <div class="custom-file my-lg-5 py-lg-5 text-center">
                            <label class="hover-file" for="customFile">
                                <h2><span class="accentColor">SUBIR VIDEO DE PRESENTACION</span></h2>
                                <h3 class="exp-txt10">MUSICO O SOLISTA</h3>
                            </label>
                            <input type="file" hidden="hidden" class="" name="customFile2">
                        </div>
                    </div>
                    <div class="row box1 mb-2 py-4">
                        <div class="col-12 text-center p-2">
                            <h4>PUEDES OFRECER <span class="accentColor">ALOJAMIENTO</span> A UNA BANDA/SOLISTA</h4>
                            <div class="form-group row">
                                <div class="form-group col-sm">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="hosting"
                                               value="1" {{$band->hosting == true ? 'checked': ''}}>
                                        <label class="form-check-label" for="Solista"><h2>SI</h2></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-radio-input" type="radio" name="hosting"
                                               value="0" {{$band->hosting == false ? 'checked': ''}} >
                                        <label class="form-check-label" for="Grupo"><h2>NO</h2></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <h4>PUEDES OFRECER <span class="accentColor">AMPLIFICACION</span> A UNA BANDA/SOLISTA</h4>
                            <div class="form-group row">
                                <div class="form-group col-sm">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="amplification"
                                               value="1" {{$band->hosting == true ? 'checked': ''}} >
                                        <label class="form-check-label" for="Solista"><h2>SI</h2></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="amplification"
                                               value="0" {{$band->hosting == false ? 'checked': ''}} >
                                        <label class="form-check-label" for="Grupo"><h2>NO</h2></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="col-12 btn btn-success mb-2">Publicar</button>
            </div>
        </form>
        <div class="row box1 mb-2 py-5">
            <div class="col text-center">
                <h3><span class="accentColor exp-txt10">REGISTRO </span> DE</h3>
                <h4>TOCATAS Y CONCIERTOS</h4>
                <span>EVALUADA EN ESCALA DE <strong class="accentColor">DO</strong> A <strong
                        class="accentColor">SI</strong>
                    (1 A 7) POR LOS FANS</span>
            </div>
            <div class="col text-center">
                <h3>MAPA</h3>
                <h4 class="accentColor">MICNOI</h4>
            </div>
        </div>
        <div class="row mt-2 text-center">
            <h2 class="exp-txt20 title-content"><span class="accentColor">afinidad</span> musical 30%</h2>
        </div>
        <div class="row  mb-2 py-2">
            <div class="col text-center">
                <img width="100%" src="img/piano.png">
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

            <div class="col-12 text-center p-3">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label"><h3>Titulo</h3></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Titulo del aviso">
                    </div>
                </div>
                <div class="form-row">
                    <label for="aviso" class="col-sm-3 col-form-label"><h3>Aviso</h3></label>
                    <div class="col-sm-9">
                        <textarea placeholder="Aviso... " class="form-control" id="aviso" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary mb-2">Publicar</button>
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
