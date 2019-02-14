@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Commenti
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
                                Tabella Commenti
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Cognome</th>
                                            <th>Evento</th>
                                            <th>Commento</th>
                                            <th>Data</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($comments as $comment)
                                            <tr class="odd gradeX">
                                                <td>{{$comment->name}}</td>
                                                <td>{{$comment->surname}}</td>
                                                <td>{{$comment->titolo}}</td>
                                                <td>{{$comment->text}}</td>
                                                <td>{{date('d F Y',strtotime($comment->timestamp))}}</td>
                                                <td>
                                                    <a href="{{route('deletecomment',['id'=>$comment->id])}}" class="btn btn-danger large" style="width: 100%;height: 100%;margin-top: 12px;"><i class="fas fa-trash-restore"> Elimina</i></a>
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
