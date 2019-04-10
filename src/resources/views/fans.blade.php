@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-2 text-center">
            <h1 class="exp-txt30 title-content">Registro y Perfil</h1>
        </div>
        <div class="row mb-2">
            <div class="col title-musicxs text-center">
                <h2 class="exp-txt30"><span class="accentColor">F</span>ANS</h2>
            </div>
        </div>
        <form>
            <div class="row">
                <div class="col mr-2">
                    <div class="row box1 mb-2 py-4">
                        <div class="col text-center">
                            <h3><span class="accentColor">INFORMACION</span> DEL FAN</h3>
                            <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nombre/Nick</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre">
                                    </div>
                                </div>
                            <div class="form-group row">
                                    <label for="edad" class="col-sm-3 col-form-label">Edad</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="edad" placeholder="25">
                                    </div>
                                </div>
                            <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="inputState">Genero</label>
                                    <div class="col-sm-9">
                                        <select id="inputState" class="form-control">
                                            <option selected>Seleccione...</option>
                                            <option>Mujer</option>
                                            <option>Hombre</option>
                                            <option>Indeterminado</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="form-row">
                                    <div class="form-group col-md-4">
                                            <label for="inputState">Region</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Seleccione...</option>
                                                <option>Region I</option>
                                                <option>Region II</option>
                                            </select>
                                        </div>
                                    <div class="form-group col-md-4">
                                            <label for="inputState">Ciudad</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Seleccione...</option>
                                                <option>Santiago</option>
                                                <option>Punta Arenas</option>
                                            </select>
                                        </div>
                                    <div class="form-group col-md-4">
                                            <label for="inputState">Comuna</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Seleccione...</option>
                                                <option>La Cisterna</option>
                                                <option>Mehuin</option>
                                                <option>Alhue</option>
                                            </select>
                                        </div>
                                </div>
                        </div>
                    </div>
                    <div class="row box1 mb-2 py-4">
                        <div class="col-12 text-center">
                            <h3>GUSTOSMUSICALES</h3>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Seleccione mas de uno presionando control</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <option>Rock</option>
                                    <option>Pop</option>
                                    <option>Soul</option>
                                    <option>Cumbia</option>
                                    <option>Salsa</option>
                                    <option>Metal</option>
                                    <option>HardCore</option>
                                    <option>Rap</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row box1 mb-2 py-4">
                        <div class="col-12 text-center">
                            <h3>REDES SOCIALES</h3>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm" id="Miembros" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Facebook</label>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm" id="Miembros" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Twitter</label>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm" id="Miembros" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Instagram</label>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm" id="Miembros" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Youtube</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm" id="Miembros" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Snapchat</label>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm" id="Miembros" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Spotify</label>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm" id="Miembros" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">Deezer</label>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm" id="Miembros" placeholder="2">
                                </div>
                                <label for="Miembros" class="col-sm-auto col-form-label">SoundCloud</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col ml-2">
                    <div class="row box1 mb-2 pb-lg-5">
                        <div class="custom-file my-lg-5 py-lg-5 text-center">
                            <label class="hover-file" for="customFile">
                                    <h2><span class="accentColor exp-txt10">SUBIR FOTO</span></h2>
                                    <h3 class="exp-txt10">DE PERFIL</h3>
                            </label>
                            <input type="file" hidden="hidden" class="" id="customFile">
                        </div>
                    </div>
                    <div class="row box1 mb-2 pb-lg-5">
                        <div class="custom-file mt-lg-3 mb-lg-5 py-lg-5 text-center">
                            <label class="hover-file" for="customFile">
                                <h2><span class="accentColor exp-txt10">SUBIR VIDEO </span></h2>
                                <h3 class="exp-txt10">DE PRESENTACION</h3>

                            </label>
                            <input type="file" hidden="hidden" class="" id="customFile">
                        </div>
                        <div class="col-12 text-center">
                            <span>(opcional)</span>
                        </div>

                    </div>
                    <div class="row box1 mb-2 py-4">
                        <div class="col-12 text-center p-2">
                            <h3>BANDAS <span class="accentColor">FAVORITAS</span></h3>
                            <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <h3>TOCATAS o CONCIERTOS <span class="accentColor">ASISTIDOS</span></h3>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row box1 mb-2 py-5">
                <div class="col text-center">
                    <h4>DEJAR QUE <span class="accentColor">MICNOI </span> ACTIVE TU UBICACION PARA
                        GEOLOCALIZAR TOCATAS Y CONCIERTOS EN <span class="accentColor">TIEMPO REAL</span></h4>
                    <div class="form-group row">
                        <div class="form-group col-sm">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Solista" value="Solista">
                                <label class="form-check-label" for="Solista"><h2>SI</h2></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Grupo" value="Grupo">
                                <label class="form-check-label" for="Grupo"><h2>NO</h2></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <h3 class="accentColor">GPS</h3>
                    <h4>MICNOI</h4>
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
                    <h2>PUBLICA UN <span class="accentColor">AVISO ...</span></h2>
                    <h3 class="px-5">DE TU PROXIMA <span class="accentColor">TOCATA O CONCIERTO</span> QUE DESEAS ASISTIR
                        Y CONOCE <span class="accentColor">NUEVOS AMIGOS #FANS</span> PARA IR A VER Y ESCUCHAR MUSICA EN VIVO </h3>
                </div>
                <div class="col-12 text-center p-5">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Titulo</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Titulo del aviso">
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="aviso" class="col-sm-3 col-form-label">Aviso</label>
                        <div class="col-sm-9">
                            <textarea placeholder="Aviso... " class="form-control" id="aviso" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary mb-2">Publicar</button>
                </div>

            </div>
        </form>
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
