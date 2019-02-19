@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">Eventi di {{$user->name}} {{$user->surname}}</h1>
            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tabella Eventi
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Evento</th>
                                            <th>Categoria</th>
                                            <th>Data</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($events as $event)
                                            <tr class="odd gradeX">
                                                <td>{{$event->titolo}}</td>
                                                <td>{{$event->categoria}}</td>
                                                <td>{{date('d F Y',strtotime($event->giorno))}}</td>
                                                <td>
                                                    <a  href="{{route('gestEvent',['id'=>$user->id,'titolo'=>$event->titolo])}}" class="btn btn-warning large" style="width: 100%;"><i class="fas fa-calendar-plus"> Gestisci l'evento di questo utente</i></a>
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
    </div>

    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

@endsection
