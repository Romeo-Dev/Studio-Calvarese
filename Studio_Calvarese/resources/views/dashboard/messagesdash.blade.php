@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Messaggi
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
                                Tabella Messaggi
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Cognome</th>
                                            <th>Email</th>
                                            <th>Messaggio</th>
                                            <th>Data</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($messages as $message)
                                            <tr class="odd gradeX">
                                                <td>{{$message->nome}}</td>
                                                <td>{{$message->cognome}}</td>
                                                <td>{{$message->email}}</td>
                                                <td>{{$message->text}}</td>
                                                <td>{{date('d F Y',strtotime($message->timestamp))}}</td>
                                                <td>
                                                    <a href="mailto:{{$message->email}}" class="btn btn-primary" style="width:100%;margin-bottom: 4px;"><i class="fab fa-telegram-plane"> Rispondi</i></a>
                                                    <a href="{{route('deletemessage',['id'=>$message->id])}}" class="btn btn-warning" style="width: 100%;"><i class="fas fa-eye-slash"> Segnala come letto</i></a>
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
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

@endsection
