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

            <div class="col-12 text-center p-3">
                @if(isset($offer->photo))
                    <div class="col-4 card">
                        <img class="card-img-top" alt="Offer Image" src="/storage/img-offer/{{$offer->photo}}"/>
                    </div>
                @endif
                <form action="/createoffer3" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>Upload Image</h3><br/><br/>

                    <div class="form-group">
                        <input type="file" {{ (!empty($offer->photo)) ? "disabled" : ''}} class="form-control-file" name="photo" id="photo" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Review Details</button>
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
                        <button type="submit" class="btn btn-danger">Remove Image</button>
                    </form>
                @endif
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
