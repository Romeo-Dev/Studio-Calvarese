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
                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                        </div>
                                                        <div class="panel-body">
                                                            <img src="{{asset('storage/home/'.$home->carosel_1)}}" alt="" width="100%" height="100%">
                                                        </div>
                                                        <div class="panel-footer">
                                                            <strong>Carosello 1</strong>
                                                        </div>
                                                        </div>
                                                    </div>
                                            <div class="col-md-4">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                    </div>
                                                    <div class="panel-body">
                                                        <img src="{{asset('storage/home/'.$home->carosel_2)}}" alt="" width="100%" height="100%">
                                                    </div>
                                                    <div class="panel-footer">
                                                        <strong>Carosello 2</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                    </div>
                                                    <div class="panel-body">
                                                        <img src="{{asset('storage/home/'.$home->carosel_3)}}" alt="" width="100%" height="100%">
                                                    </div>
                                                    <div class="panel-footer">
                                                        <strong>Carosello 3</strong>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <hr>
                                <h3>{{$home->video_titolo}}</h3>
                                <br>
                                <video src="{{asset('storage/home/'.$home->video)}}" alt="" controls width="100%" height="35%"></video>
                                <br>
                                <p>{!! $home->video_desc !!}</p>
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
                                <div class="form-group">
                                    <label for="immaginepres" >Inserire immagine Carosello_1</label>
                                    <input type="file" name="carosello1" id="immaginepres">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label >Inserire immagine Carosello_2</label>
                                    <input type="file" name="carosello2" id="immaginepres">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Inserire immagine Carosello_3</label>
                                    <input type="file" name="carosello3" id="immaginepres">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Titolo Video</label>
                                    <input type="text" class="form-control" id="evento" placeholder="Titolo" name="video_titolo" >
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Inserire Video (in formato mp4)</label>
                                    <input type="file" name="video" id="immaginepres">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="servizio">Descrizione Video</label>
                                    <textarea class="form-control" rows="3" placeholder="Descrizione in italiano" name="video_desc" ></textarea>
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
