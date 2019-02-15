@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Categorie <small><a href="#categoria" class="btn btn-success"><i class="fas fa-plus-circle"> Nuova Categoria</i></a></small>
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
                                Tabella Categorie
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Categoria</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $category)
                                            <tr class="odd gradeX">
                                                <td>{{$category->categoria}}</td>
                                                <td>
                                                    <a href="{{route('editcat',['id' =>$category->id])}}" class="btn btn-primary large" style="width: 100%;margin-bottom: 4px;"><i class="fas fa-edit"> Edita</i></a>
                                                    <br>
                                                    <a href="{{route('deletecat',['id' =>$category->id])}}" class="btn btn-danger large" style="width: 100%;"><i class="fas fa-trash-restore"> Elimina</i></a>
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
                                    <div class="title">Aggiungi Categoria</div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="{{route('storecat')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="categoria">Nome Categoria</label>
                                        <input type="text" class="form-control" id="categoria" placeholder="Nome della categoria" name="categoria">
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
