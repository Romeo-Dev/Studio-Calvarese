@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">Eventi <small><a href="#evento" class="btn btn-success"><i class="fas fa-plus-circle"> Nuovo Evento</i></a></small>
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
                                Tabella Eventi
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Evento</th>
                                                <th>Utente</th>
                                                <th>Categoria</th>
                                                <th>Data</th>
                                                <th>Pubblicato</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($events as $event)
                                            <tr class="odd gradeX">
                                                <td>{{$event->titolo}}</td>
                                                <td>{{$event->email}}</td>
                                                <td>{{$event->categoria}}</td>
                                                <td>{{date('d F Y',strtotime($event->giorno))}}</td>
                                                <td>{{$event->pubblicato}}</td>
                                                <td>
                                                    <a href="{{route('editEvent',['id'=>$event->id])}}" class="btn btn-primary large" style="width: 100%;margin-bottom: 4px;"><i class="fas fa-edit"> Edita</i></a>
                                                    <br>
                                                    <a href="{{route('deleteEventsByAdmin',['id'=>$event->id])}}" class="btn btn-danger large" style="width: 100%;"><i class="fas fa-trash-restore"> Elimina</i></a>
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


            <div class="row">
                <div class="col-md-12" id="evento">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="card-title">
                                <div class="title" >Aggiungi Evento</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{url('/dash/events')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="servizio">Utente</label>
                                    <input type="text" class="form-control"  placeholder="Email dell'utente" name="service" required>
                                </div>
                                <div class="form-group">
                                    <label >Data (Y-m-d alfanumerico)</label>
                                    <input type="text" class="form-control" placeholder="Data" name="date" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select class="selectbox">
                                        <optgroup label="nessuna">
                                            @foreach($categories as $category)
                                                <option value={{$category->categoria}}>{{$category->categoria}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="servizio">Titolo Evento</label>
                                    <input type="text" class="form-control"  placeholder="Titolo dell'evento" name="service" required>
                                </div>
                                <div class="sub-title">Paragrafo 1</div>
                                <div>
                                    <textarea class="form-control" rows="3" placeholder="Paragrafo" name="descrizione" required></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="servizio">Sottotitolo</label>
                                    <input type="text" class="form-control"  placeholder="Sottotitolo" name="service" required>
                                </div>
                                <div class="sub-title">Paragrafo 2</div>
                                <div>
                                    <textarea class="form-control" rows="3" placeholder="Paragrafo" name="descrizione" required></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="servizio">Conclusione</label>
                                    <input type="text" class="form-control"  placeholder="Conclusione" name="service" required>
                                </div>
                                <div class="sub-title">Paragrafo 3</div>
                                <div>
                                    <textarea class="form-control" rows="3" placeholder="Paragrafo" name="descrizione" required></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="servizio">Rendi pubblico</label>
                                    <input type="text" class="form-control"  placeholder="si/no" name="pubblicato" required>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label>Impaginato</label>
                                    <input type="file" id="exampleInputFile" name="impaginato">
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
    </div>


    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

@endsection
