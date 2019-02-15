@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Trofei <small><a href="#servizio" class="btn btn-success"><i class="fas fa-plus-circle"> Nuovo Trofeo</i></a></small>
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
                                Tabella Trofei
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Titolo</th>
                                            <th>Descrizione</th>
                                            <th>Data</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($trophies as $trophy)
                                            <tr class="odd gradeX">
                                                <td>{{$trophy->title}}</td>
                                                <td>{{$trophy->description}}</td>
                                                <td>{{date('d F Y',strtotime($trophy->conseguimento))}}</td>
                                                <td>
                                                    <a {{--href="{{route('editrophy',['id'=>$trophy->id])}}"--}} class="btn btn-primary large" style="width: 100%;margin-bottom: 4px;"><i class="fas fa-edit"> Edita</i></a>
                                                    <br>
                                                    <a href="{{route('deletetrophy',['id'=>$trophy->id])}}" class="btn btn-danger large" style="width: 100%;"><i class="fas fa-trash-restore"> Elimina</i></a>
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
                                    <div class="title">Aggiungi Trofeo</div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="{{route('insertrophy')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nome Trofeo</label>
                                        <input type="text" class="form-control" placeholder="Titolo del trofeo" name="title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Path Assoluto</label>
                                        <input type="text" class="form-control" placeholder="Titolo del trofeo" name="path" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Trofeo</label>
                                        <input type="file" id="exampleInputFile" name="trofeo">
                                    </div>
                                    <div class="sub-title">Descrizione</div>
                                    <div>
                                        <textarea class="form-control" rows="3" placeholder="Descrizione del trofeo" name="descrizione" required></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label >Data Conseguimento (Y-m-d alfanumerico)</label>
                                        <input type="text" class="form-control" placeholder="Data" name="date" required>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-circle"><i class="fa fa-check"></i></button>
                                    <button type="reset" class="btn btn-warning btn-circle"><i class="fas fa-times"></i></button>
                                </form>
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
