@extends('dashboard.mydash')
@section('content')

<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Servizi <small><a href="#servizio" class="btn btn-success"><i class="fas fa-plus-circle"> Nuovo Servizio</i></a></small>
            @if(session('alert'))
                <div class="alert alert-success">
                    {{session('alert')}}
                </div>
                @endif
        </h1>


        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabella Servizi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Servizio</th>
                                        <th>Descrizione</th>
                                        <th>Icone</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $service)
                                    <tr class="odd gradeX">
                                        <td>{{$service->service}}</td>
                                        <td>{{$service->descrizione}}</td>
                                        <td>{{$service->icon}}</td>
                                        <td>
                                            <a href="" class="btn btn-primary large" style="width: 100%;margin-bottom: 4px;"><i class="fas fa-edit"> Edita</i></a>
                                            <br>
                                            <a href="{{route('deleteservice',['id'=>$service->id])}}" class="btn btn-danger large" style="width: 100%;"><i class="fas fa-trash-restore"> Elimina</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="card-title">
                                <div class="title">Aggiungi Servizio</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{route('insertservice')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="servizio">Nome Servizio</label>
                                    <input type="text" class="form-control" id="servizio" placeholder="Nome del servizio" name="service" required>
                                </div>
                                <div class="sub-title">Descrizione</div>
                                <div>
                                    <textarea class="form-control" rows="3" placeholder="Descrizione servizio" name="descrizione" required></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="icona" >Nome Icona</label>
                                    <p style="padding-top: 1px;">L icona da scegliere puo essere presa direttamente dal link <a href="https://fontawesome.com/" target="_blank">clicca qui</a></p>
                                    <input type="text" class="form-control" id="icona" placeholder="Nome dell icona" name="icon" required>
                                </div>

                                <button type="submit" class="btn btn-success btn-circle"><i class="fa fa-check"></i></button>
                                <button type="reset" class="btn btn-warning btn-circle"><i class="fas fa-times"></i></button>
                            </form>
                        </div>
                    </div>
                </div>


    </div>
</div>

    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

    @endsection
