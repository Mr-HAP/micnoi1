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
                <h2>Paso  <span class="accentColor">3</span></h2>
                <p>Elige una imagen llamativa para tu Aviso!</p>
            </div>

            <div class="col-12 text-center">
                <p>Creando aviso tipo: {{ session()->get('typeDescription') }}</p>
            </div>

            <div class="col-12 text-center p-3">
                @if(isset($offer->photo))
                    <div class="col-4 card">
                        <img class="card-img-top" alt="Offer Image" src="/storage/img-offer/{{$offer->photo}}"/>
                    </div>
                @endif
                <form action="/createoffer3" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>Cargar Imagenes</h3><br/><br/>

                    <div class="form-group">
                        <input type="file" {{--{{ (!empty($offer->photo)) ? "disabled" : ''}}--}} class="form-control-file" name="images[]" id="photo1" aria-describedby="fileHelp" accept="image/png, image/jpeg, image/jpg">
                        <input type="file" {{--{{ (!empty($offer->photo)) ? "disabled" : ''}}--}} class="form-control-file" name="images[]" id="photo2" aria-describedby="fileHelp" accept="image/png, image/jpeg, image/jpg">
                        <input type="file" {{--{{ (!empty($offer->photo)) ? "disabled" : ''}}--}} class="form-control-file" name="images[]" id="photo3" aria-describedby="fileHelp" accept="image/png, image/jpeg, image/jpg">
                        <input type="file" {{--{{ (!empty($offer->photo)) ? "disabled" : ''}}--}} class="form-control-file" name="images[]" id="photo4" aria-describedby="fileHelp" accept="image/png, image/jpeg, image/jpg">
                        <input type="file" {{--{{ (!empty($offer->photo)) ? "disabled" : ''}}--}} class="form-control-file" name="images[]" id="photo5" aria-describedby="fileHelp" accept="image/png, image/jpeg, image/jpg">
                        <small id="fileHelp" class="alert alert-info">Por favor cargue un archivo de imagen. El tamaño de la imagen no debe ser mayor a 2MB.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Previsualizar aviso</button>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form><br/>
                @if(isset($offer->photo))
                    <form action="/remove-image" method="post">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Quitar imagen</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
