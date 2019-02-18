@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">Utenti</h1>
            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tabella Utenti
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Cognome</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr class="odd gradeX">
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->surname}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    <a href="mailto:{{$user->email}}" class="btn btn-primary large" style="width: 100%;margin-bottom: 4px;"><i class="fas fa-envelope"> Contatta Utente</i></a>
                                                    <br>
                                                    <a href="{{route('eventsByUser',['id'=>$user->id])}}" class="btn btn-warning large" style="width: 100%;"><i class="fas fa-camera-retro"> Eventi Associati</i></a>
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
