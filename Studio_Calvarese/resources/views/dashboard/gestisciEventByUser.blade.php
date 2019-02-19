@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Gestisci <strong><i>{{$event['0']->titolo}}</i></strong>
                @if(session('alert'))
                    <div class="alert alert-success">
                        {{session('alert')}}
                    </div>
                @endif
            </h1>
            <div id="page-inner">
            <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h2>Richieste di stampe</h2>
                        </div>
                        <div class="panel-body">
                            <h3>Tutte le stampe che gli utenti hanno richiesto</h3>
                            <br>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Immagine</th>
                                    <th>Nome</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($stampe as $stampa)
                                <tr>
                                    <td><img src="{{asset('storage/images/'.$event['0']->categoria.'/'.$event['0']->titolo.'/'.$stampa->path)}}" alt="" width="50%" height="50%"></td>
                                    <td>{{$stampa->path}}</td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2>Carica impaginato</h2>
                        </div>
                        @if($event['0']->impaginato == 'NULL')
                        <div class="panel-body">
                        <form action="{{route('uploadimp')}}" method="post" id="editForm" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="categoria" value="{{$event['0']->categoria}}">
                            <input type="hidden" name="titolo" value="{{$event['0']->titolo}}">
                            <input type="hidden" name="id" value="{{$event['0']->id}}">
                            <div class="form-group">
                                <label for="imp">Scegliere il file zip dell impaginato</label>
                                <input type="file" class="form-control-file" id="imp" placeholder="Nome del servizio" name="impaginato">
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-success btn-circle"><i class="fa fa-check"></i></button>
                                <button type="reset" class="btn btn-warning btn-circle"><i class="fas fa-times"></i></button>
                            </div>
                        </form>
                        </div>
                            @else
                            <div class="panel-body">
                                <div class="alert-warning">
                                    <h4>
                                        Impaginato gia presente nell evento
                                    </h4>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
            </div>
    </div>
    </div>
@endsection
