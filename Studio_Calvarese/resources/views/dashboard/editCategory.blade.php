@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Edita Servizio
                @if(session('alert'))
                    <div class="alert alert-danger">
                        {{session('alert')}}
                    </div>
                @endif
            </h1>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h2>Categoria</h2>
                        </div>
                        <div class="panel-body">
                            <p><h4>{{$category->categoria}}</h4></p>
                        </div>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2>Edita Categoria</h2>
                        </div>
                        <form action="{{route('updatecat')}}" method="post" id="editForm">
                            @csrf
                            <input type="hidden" name="id" value="{{$category->id}}">
                            <div class="form-group">
                                <label for="categoria">Nome Categoria</label>
                                <input type="text" class="form-control" id="categoria" placeholder="Nome del servizio" name="categoria" >
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
