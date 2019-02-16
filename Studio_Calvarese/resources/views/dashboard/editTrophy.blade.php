@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Edita Servizio
                @if(session('alert'))
                    <div class="alert alert-warning">
                        {{session('alert')}}
                    </div>
                @endif
            </h1>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h2>{{$trophy->title}}</h2>
                        </div>
                        <div class="panel-body">
                            <p>{{$trophy->description}}</p>
                            <p>Data conseguimento: <b>{{$trophy->conseguimento}}</b></p>
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2>Edita Servizio</h2>
                        </div>
                        <form action="{{route('updateTrophy')}}" method="post" id="editForm">
                            @csrf
                            <input type="hidden" name="id" value="{{$trophy->id}}">
                            <div class="form-group">
                                <label for="servizio">Titolo trofeo</label>
                                <input type="text" class="form-control" id="servizio" placeholder="Nome del servizio" name="title" >
                            </div>
                            <div class="sub-title">Descrizione</div>
                            <div>
                                <textarea class="form-control" rows="3" placeholder="Descrizione servizio" name="descrizione" ></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="icona" >Data del trofeo</label>
                                <p style="padding-top: 1px;"><small>Data Conseguimento (Y-m-d alfanumerico)</small></p>
                                <input type="text" class="form-control" id="icona" placeholder="Nome dell icona" name="data" >
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
@endsection
