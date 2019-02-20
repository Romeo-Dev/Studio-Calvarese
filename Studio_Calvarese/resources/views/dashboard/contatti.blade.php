@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Contatti
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
                                <h2>I miei contatti</h2>
                            </div>
                            <div class="panel-body">
                                <h3>Descrizione contatti:</h3>
                                <p>{!!$contact->contact!!}</p>
                                <hr>
                                <h3>Facebook (link):</h3>
                                <p>{{$contact->facebook}}</p>
                                <hr>
                                <h3>Instagram (link):</h3>
                                <p>{{$contact->instagram}}</p>
                                <hr>
                                <h3>Numero telefonico:</h3>
                                <p>{{$contact->number}}</p>
                                <hr>
                                <h3>Email:</h3>
                                <p>{{$contact->email}}</p>
                                <hr>
                                <h3>Via :</h3>
                                <p>{!!$contact->nome_via!!}</p>
                                <hr>
                                <h3>Maps (link)</h3>
                                <p style="overflow: auto">{{$contact->location}}</p>
                            </div>
                            <div class="panel-footer">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h2>Edita Contatti</h2>
                            </div>
                            <form action="{{route('updateContact')}}" method="post" id="editForm" >
                                @csrf
                                <div class="form-group">
                                    <label >Descrizione contatti</label>
                                    <textarea class="form-control" rows="3" placeholder="Descrizione dei contatti" name="contact" ></textarea>
                                    <br>
                                    <label >Facebook</label>
                                    <input class="form-control" rows="3" placeholder="Inserire link di facebook" name="facebook" >
                                    <br>
                                    <label >Instagram</label>
                                    <input class="form-control" rows="3" placeholder="Inserire link di instagram" name="instagram" >
                                    <br>
                                    <label >Numero telefonico</label>
                                    <input class="form-control" rows="3" placeholder="Inserire numero di telefono" name="number" >
                                    <br>
                                    <label >Email</label>
                                    <input class="form-control" rows="3" placeholder="Inserire nuova email" name="email" >

                                <div class="sub-title">Via</div>
                                <div>
                                    <textarea class="form-control" rows="3" placeholder="Scrivere la via del negozio" name="nome_via" ></textarea>
                                </div>
                                <br>
                                    <label >Maps</label>
                                    <input class="form-control" rows="3" placeholder="Inserire link di maps" name="maps" >

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
    </div>
@endsection
