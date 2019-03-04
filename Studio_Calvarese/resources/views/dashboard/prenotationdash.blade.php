@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">Prenotazioni </h1>
                @if(session('alert'))
                    <div class="alert alert-success">
                        {{session('alert')}}
                    </div>

                @elseif(session('alert2'))
                    <div class="alert alert-warning">
                        {{session('alert2')}}

                        @elseif(session('alertdanger'))
                            <div class="alert alert-danger">
                                {{session('alertdanger')}}

                            </div>
                    </div>@endif
            </h1>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabella Prenotazione Appuntamenti
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Utente</th>
                                        <th>Data</th>
                                        <th>Ora</th>
                                        <th>Stato</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($prenotazioni as $prenotazione)
                                        <tr class="odd gradeX">
                                            <td>{{$prenotazione->email}}</td>
                                            <td>{{date('d F Y',strtotime($prenotazione->appuntamento))}}</td>
                                            <td>{{date('H:i',strtotime($prenotazione->ora))}}</td>
                                            <td>{{$prenotazione->stato}}</td>
                                            <td>
                                                <a href="{{route('editPrenotation',['id'=>$prenotazione->id])}}" class="btn btn-primary large" style="width: 100%;margin-bottom: 4px;"><i class="fas fa-ok"> Edita</i></a>
                                                <br>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
