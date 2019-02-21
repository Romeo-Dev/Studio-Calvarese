@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Homepage
                @if(session('alert'))
                    <div class="alert alert-success">
                        {{session('alert')}}
                    </div>
                @endif
            </h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h2>Presentazione Homepage</h2>
                            </div>
                            <div class="panel-body">
                                <h3>Slider</h3>
                                <br>
       {{--                        @foreach($images->chunk(3) as $chunk)
                                    <div class="row">
                                        <div class="col-md-12">
                                            @foreach($chunk as $image)
                                                <div class="col-md-4">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                        </div>
                                                        <div class="panel-body">
                                                            <img src="{{asset('storage/images/'.$event->categoria.'/'.$event->titolo.'/'.$image->path)}}" alt="" width="100%" height="100%">
                                                        </div>
                                                        <div class="panel-footer">
                                                            <strong style="text-transform: uppercase">{{$image->posizione}}</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach--}}
                                <hr>
                                <h3>Titolo Video</h3>
                                <br>
                                <video src="#" alt="" controls width="100%" height="35%"></video>
                                <br>
                                <p>Descrizione video</p>
                                <br>
                            </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h2>Edita Homepage</h2>
                            </div>
                            <form action="{{route('updateHome')}}" method="post" id="editForm" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="">
                                <div class="form-group">
                                    <label for="immaginepres" >Inserire immagine Carosello_1</label>
                                    <input type="file" name="carosello1" id="immaginepres">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="immaginepres" >Inserire immagine Carosello_2</label>
                                    <input type="file" name="carosello2" id="immaginepres">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="immaginepres" >Inserire immagine Carosello_3</label>
                                    <input type="file" name="carosello3" id="immaginepres">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="servizio">Titolo Video</label>
                                    <input type="text" class="form-control" id="evento" placeholder="Titolo" name="titolovideo" >
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="immaginepres" >Inserire Video</label>
                                    <input type="file" name="video" id="immaginepres">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="servizio">Descrizione Video</label>
                                    <textarea class="form-control" rows="3" placeholder="Descrizione in italiano" name="desc_video" ></textarea>
                                </div>
                                <br>
                                    <button type="submit" class="btn btn-success btn-circle"><i class="fa fa-check"></i></button>
                                    <button type="reset" class="btn btn-warning btn-circle"><i class="fas fa-times"></i></button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
