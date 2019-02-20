@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Chi Siamo
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
                            <h2>Presentazione Chi siamo</h2>
                        </div>
                        <div class="panel-body">
                            <img src="{{asset('storage/images/logo/'.$about->immagine)}}" alt="" width="100%" height="35%">
                            <h3>Chi siamo</h3>
                            <p>{!! $about->chi_siamo !!}</p>
                            <h3>About_us</h3>
                            <p>{!! $about->about_us !!}</p>
                        </div>
                        <div class="panel-footer">

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2>Edita Presentazione</h2>
                        </div>
                        <form action="{{route('updateAbout')}}" method="post" id="editForm" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <div class="form-group">
                                <label for="servizio">Chi Siamo</label>
                                <textarea class="form-control" rows="3" placeholder="Descrizione in italiano" name="chi_siamo" ></textarea>
                            </div>
                            <div class="sub-title">About us</div>
                            <div>
                                <textarea class="form-control" rows="3" placeholder="Descrizione in inglese" name="about_us" ></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="immaginepres" >Inserire immagine di presentazione</label>
                                <input type="file" name="immagine" id="immaginepres">
                              </div>

                            <div class="panel-footer">
                                <button type="submit" class="btn btn-success btn-circle"><i class="fa fa-check"></i></button>
                                <button type="reset" class="btn btn-warning btn-circle"><i class="fas fa-times"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
@endsection
