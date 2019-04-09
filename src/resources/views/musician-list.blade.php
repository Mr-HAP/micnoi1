@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-2 text-center">
            <h1 class="exp-txt30 title-content">MUSICXS</h1>
        </div>
        <div class="row mb-0">
            <nav class="col-12 px-0">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="col-4 text-center nav-item nav-link active" id="nav-locales-tab" data-toggle="tab" href="#nav-locales"
                       role="tab" aria-controls="nav-locales" aria-selected="true">
                        <span class="accentColor"> L</span>OCALES
                    </a>

                    <a class="col-4 text-center nav-item nav-link" id="nav-invitados-tab" data-toggle="tab" href="#nav-invitados"
                       role="tab" aria-controls="nav-invitados" aria-selected="false">
                        <span class="accentColor"> I</span>NVITADOS
                    </a>

                    <a class="col-4 text-center nav-item nav-link" id="nav-mapa-tab" data-toggle="tab" href="#nav-mapa"
                       role="tab" aria-controls="nav-mapa" aria-selected="false"><span class="accentColor"> M</span>APA
                    </a>
                </div>
            </nav>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-locales" role="tabpanel" aria-labelledby="nav-locales-tab">
                <div class="row box1 mb-2 py-5">
                    <div class="col text-center">
                        <h3>MUSICOS Y BANDAS <span class="accentColor">LOCALES</span> </h3>
                        <hr>
                        <span>Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza,
                    le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son
                    señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien
                    sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca</span>
                    </div>
                </div>
                <div class="row box1 my-2">
                    <div class="col-12 text-center py-5">
                        <div class="card mb-1">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img src="img/metallica.jpg" width="300px" height="300px" class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2">
                                        <h4 class="card-title">TITULO ANUNCIO DE LA BANDA</h4>
                                        <p class="card-text">Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza,
                                            le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas
                                            estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han
                                            de sucedernos bien las cosas</p>
                                        <a href="#" class="btn btn-primary">Ver el anuncio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img src="img/queen.jpg" width="300px" height="300px" class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2">
                                        <h4 class="card-title">TITULO ANUNCIO DE LA BANDA</h4>
                                        <p class="card-text">Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza,
                                            le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas
                                            estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han
                                            de sucedernos bien las cosas</p>
                                        <a href="#" class="btn btn-primary">Ver el anuncio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-invitados" role="tabpanel" aria-labelledby="nav-invitados-tab">
                <div class="row box1 mb-2 py-5">
                    <div class="col text-center">
                        <h3>MUSICOS Y BANDAS <span class="accentColor">INVITADOS</span> </h3>
                        <hr>
                        <span>Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza,
                    le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son
                    señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien
                    sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca</span>
                    </div>
                </div>
                <div class="row box1 my-2">
                    <div class="col-12 text-center py-5">
                        <div class="card mb-1">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img src="img/metallica.jpg" width="300px" height="300px" class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2">
                                        <h4 class="card-title">TITULO ANUNCIO DE LA BANDA</h4>
                                        <p class="card-text">Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza,
                                            le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas
                                            estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han
                                            de sucedernos bien las cosas</p>
                                        <a href="#" class="btn btn-primary">Ver el anuncio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img src="img/queen.jpg" width="300px" height="300px" class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2">
                                        <h4 class="card-title">TITULO ANUNCIO DE LA BANDA</h4>
                                        <p class="card-text">Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza,
                                            le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas
                                            estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han
                                            de sucedernos bien las cosas</p>
                                        <a href="#" class="btn btn-primary">Ver el anuncio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-mapa" role="tabpanel" aria-labelledby="nav-mapa-tab">
                <div class="col text-center">
                    <h3>MUSICOS Y BANDAS <span class="accentColor">INVITADOS</span> </h3>
                    <hr>
                    <span>Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza,
                    le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son
                    señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien
                    sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca</span>
                </div>
            </div>
            <div class="row box1 my-2">
                <div class="col-12 text-center py-5">
                    <div class="card mb-1">
                        <div class="row no-gutters">
                            <div class="col-auto">
                                <img src="img/metallica.jpg" width="300px" height="300px" class="img-fluid" alt="">
                            </div>
                            <div class="col">
                                <div class="card-block px-2">
                                    <h4 class="card-title">TITULO ANUNCIO DE LA BANDA</h4>
                                    <p class="card-text">Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza,
                                        le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas
                                        estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han
                                        de sucedernos bien las cosas</p>
                                    <a href="#" class="btn btn-primary">Ver el anuncio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1">
                        <div class="row no-gutters">
                            <div class="col-auto">
                                <img src="img/queen.jpg" width="300px" height="300px" class="img-fluid" alt="">
                            </div>
                            <div class="col">
                                <div class="card-block px-2">
                                    <h4 class="card-title">TITULO ANUNCIO DE LA BANDA</h4>
                                    <p class="card-text">Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza,
                                        le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas
                                        estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han
                                        de sucedernos bien las cosas</p>
                                    <a href="#" class="btn btn-primary">Ver el anuncio</a>
                                </div>
                            </div>
                        </div>
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
