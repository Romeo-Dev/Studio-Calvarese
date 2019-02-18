@extends('dashboard.mydash')
@section('content')


    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Edita Evento
                @if(session('alert'))
                    <div class="alert alert-success">
                        {{session('alert')}}
                    </div>
                @endif
            </h1>
            <div id="page-inner">
                <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h2>{{$event->titolo}}</h2>
                        </div>
                        <div class="panel-body">
                            <p>{{$event->paragraph_1}}</p>
                        </div>
                        <div class="panel-body">
                            <p>{{$event->subtitle}}</p>
                        </div>
                        <div class="panel-body">
                            <p>{{$event->paragraph_2}}</p>
                        </div>
                        <div class="panel-body">
                            <p>{{$event->in_conclusion}}</p>
                        </div>
                        <div class="panel-body">
                            <p>{{$event->paragraph_3}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2>Edita Evento</h2>
                        </div>
                        <form action="{{route('updatevent')}}" method="post" id="editForm">
                            @csrf
                            <div class="form-group">
                                <label for="servizio">Utente</label>
                                <input type="text" class="form-control" id="evento" placeholder="Email dell'utente" name="service" required>
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
                                <input type="text" class="form-control" id="evento" placeholder="Titolo dell'evento" name="service" required>
                            </div>
                            <div class="sub-title">Paragrafo 1</div>
                            <div>
                                <textarea class="form-control" rows="3" placeholder="Paragrafo" name="descrizione" required></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="servizio">Sottotitolo</label>
                                <input type="text" class="form-control" id="evento" placeholder="Sottotitolo" name="service" required>
                            </div>
                            <div class="sub-title">Paragrafo 2</div>
                            <div>
                                <textarea class="form-control" rows="3" placeholder="Paragrafo" name="descrizione" required></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="servizio">Conclusione</label>
                                <input type="text" class="form-control" id="evento" placeholder="Conclusione" name="service" required>
                            </div>
                            <div class="sub-title">Paragrafo 3</div>
                            <div>
                                <textarea class="form-control" rows="3" placeholder="Paragrafo" name="descrizione" required></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="servizio">Rendi pubblico</label>
                                <input type="text" class="form-control" id="evento" placeholder="si/no" name="pubblicato" required>
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

@endsection
