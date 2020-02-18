@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-2 text-center">
            <h1 class="exp-txt30 title-content">Crea tu Perfil</h1>
        </div>
        <div class="row mb-2">
            <div class="col title-musicxs text-center">
                <h2 class=""><span class="accentColor">E</span>lige si quieres escuchar o hacer musica</h2>
            </div>
        </div>
        <div class="row mb-0">
            <nav class="col-12 px-0">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
    {{--                <a class="col-4 text-center nav-item nav-link active" id="nav-fans-tab" data-toggle="tab"
                       href="#nav-fans"
                       role="tab" aria-controls="nav-fans" aria-selected="true">
                        <span class="accentColor"> F</span>ANS
                    </a>--}}
                    <a class="col-4 text-center nav-item nav-link active" id="nav-musicos-tab" data-toggle="tab"
                       href="#nav-musicos"
                       role="tab" aria-controls="nav-musicos" aria-selected="false">
                        <span class="accentColor"> M</span>XSICOS
                    </a>
                </div>
            </nav>
        </div>
        <div class="tab-content" id="nav-tabContent">

{{--            <div class="tab-pane fade show active" id="nav-fans" role="tabpanel" aria-labelledby="nav-fans-tab">
                <div class="row box1 mb-2 py-5">
                    <div class="col text-center">
                        <span>Completa tu perfil de usuario para que puedas encontrar a los mejores musicos y bandas mas cercanos a ti.</span>
                    </div>
                </div>
                <form role="form" method="post" action="{{url('/musician/store')}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col mr-2">
                            <div class="row box1 mb-2 py-4">
                                <div class="col text-center">
                                    <h3><span class="accentColor">INFORMACION</span> DEL FAN</h3>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nombre/Nick</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEmail3"
                                                   placeholder="Nombre">
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
                                        <label for="exampleFormControlSelect2">Seleccione mas de uno presionando
                                            control</label>
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
                                            <input type="number" class="form-control form-control-sm" id="Miembros"
                                                   placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Facebook</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm" id="Miembros"
                                                   placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Twitter</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm" id="Miembros"
                                                   placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Instagram</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm" id="Miembros"
                                                   placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Youtube</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm" id="Miembros"
                                                   placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Snapchat</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm" id="Miembros"
                                                   placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Spotify</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm" id="Miembros"
                                                   placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Deezer</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm" id="Miembros"
                                                   placeholder="2">
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
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <h3>TOCATAS o CONCIERTOS <span class="accentColor">ASISTIDOS</span></h3>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="col-12 btn btn-success mb-2">Publicar</button>
                    </div>
                </form>
            </div>--}}

            <div class="tab-pane fade show active" id="nav-musicos" role="tabpanel" aria-labelledby="nav-musicos-tab">
                <div class="row box1 mb-2 py-5">
                    <div class="col text-center">
                        <span>Completa tu Perfil como <strong>MUSICX</strong> Cuentanos si eres una Banda o solista, y tu trayectoria musical, asi podremos acercar a mas fans a tu perfil.</span>
                    </div>
                </div>
                <form role="form" method="post" action="{{url('/musician/store')}}">
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
                                                   value="">
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
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="region">Region</label>
                                            <select id="region" name="region" class="form-control">
                                                <option selected value="">Todas las regiones...</option>
                                                @foreach($states as $state)
                                                    <option value="{{$state->state_id}}">{{$state->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Ciudad</label>
                                            <input type="text" class="form-control" name="city" placeholder="Santiago"
                                                   value="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Pais</label>
                                            <input type="text" class="form-control" name="country" placeholder="Chile"
                                                   value="Chile">
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
                                        <label for="exampleFormControlSelect2">Seleccione mas de uno presionando
                                            control</label>
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
                                            <input type="number" class="form-control form-control-sm"
                                                   name="songs_number" value="" placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Canciones</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm" name="eps"
                                                   placeholder="2" value="">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">EPS</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm" name="discs"
                                                   value="" placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Discos</label>
                                    </div>
                                </div>
                                <div class="col-sm-8 text-center">
                                    <div class="form-row">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="facebook"
                                                   value="" placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Facebook</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="instagram"
                                                   value="" placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Instagram</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="youtube"
                                                   value="" placeholder="2">
                                        </div>
                                        <label for="Miembros" class="col-sm-auto col-form-label">Youtube</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="concert"
                                                   value="" placeholder="2">
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
                                    <label class="hover-file" for="customFile" data-toggle="tooltip" data-placement="top" title="Proximamente">
                                        <h2><span class="accentColor">SUBIR VIDEO DE PRESENTACION</span></h2>
                                        <h3 class="exp-txt10">MUSICO O SOLISTA</h3>
                                    </label>
                                    {{--<input type="file" hidden="hidden" class="" name="customFile2">--}}
                                </div>
                            </div>
                            <div class="row box1 mb-2 py-4">
                                <div class="col-12 text-center p-2">
                                    <h4>PUEDES OFRECER <span class="accentColor">ALOJAMIENTO</span> A UNA BANDA/SOLISTA
                                    </h4>
                                    <div class="form-group row">
                                        <div class="form-group col-sm">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hosting" value="1">
                                                <label class="form-check-label" for="Solista"><h2>SI</h2></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-radio-input" type="radio" name="hosting" value="0">
                                                <label class="form-check-label" for="Grupo"><h2>NO</h2></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <h4>PUEDES OFRECER <span class="accentColor">AMPLIFICACION</span> A UNA
                                        BANDA/SOLISTA</h4>
                                    <div class="form-group row">
                                        <div class="form-group col-sm">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="amplification"
                                                       value="1">
                                                <label class="form-check-label" for="Solista"><h2>SI</h2></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="amplification"
                                                       value="0">
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
            </div>

        </div>


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
