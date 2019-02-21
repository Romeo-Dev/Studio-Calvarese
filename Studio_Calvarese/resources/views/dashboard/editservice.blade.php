@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Edita Servizio
                @if(session('alert'))
                    <div class="alert alert-success">
                        {{session('alert')}}
                    </div>
                @endif
            </h1>

            <div class="col-md-12">
                <div class="col-md-6">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                       <h2>{{$service->service}}</h2>
                    </div>
                    <div class="panel-body">
                        <p>{{$service->descrizione}}</p>
                        <p>Icon:  <button class="btn btn-lg btn-warning"><i class="{{$service->icon}}"></i></button></p>
                    </div>

                </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2>Edita Servizio</h2>
                        </div>
                        <form action="{{route('updateservice')}}" method="post" id="editForm">
                            @csrf
                            <input type="hidden" name="id" value="{{$service->id}}">
                            <div class="form-group">
                                <label for="servizio">Nome Servizio</label>
                                <input type="text" class="form-control" id="servizio" placeholder="Nome del servizio" name="service" >
                            </div>
                            <div class="sub-title">Descrizione</div>
                            <div>
                                <textarea class="form-control" rows="3" placeholder="Descrizione servizio" name="descrizione" ></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="icona" >Nome Icona</label>
                                <p style="padding-top: 1px;">L icona da scegliere puo essere presa direttamente dal link <a href="https://fontawesome.com/icons" target="_blank">clicca qui.</a>
                                    <br><strong>*(prendere e compilare il campo solo con il nome dell icona)</strong></p>
                                <input type="text" class="form-control" id="icona" placeholder="Nome dell icona" name="icon" >
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
@endsection
