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
                            <input type="hidden" name="id" value="{{$event->id}}">
                            <div class="form-group">
                                <label >Data (Y-m-d alfanumerico)</label>
                                <input type="text" class="form-control" placeholder="Data" name="data" >
                            </div>
                            <br>
                            <div class="sub-title">Paragrafo 1</div>
                            <div>
                                <textarea class="form-control" rows="3" placeholder="Paragrafo" name="par1" ></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="servizio">Sottotitolo</label>
                                <input type="text" class="form-control" id="evento" placeholder="Sottotitolo" name="sottotitolo" >
                            </div>
                            <div class="sub-title">Paragrafo 2</div>
                            <div>
                                <textarea class="form-control" rows="3" placeholder="Paragrafo" name="par2" ></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="servizio">Conclusione</label>
                                <input type="text" class="form-control" id="evento" placeholder="Conclusione" name="conclusione" >
                            </div>
                            <div class="sub-title">Paragrafo 3</div>
                            <div>
                                <textarea class="form-control" rows="3" placeholder="Paragrafo" name="par3" ></textarea>
                            </div>



                            <br>
                            <button type="submit" class="btn btn-success btn-circle"><i class="fa fa-check"></i></button>
                            <button type="reset" class="btn btn-warning btn-circle"><i class="fas fa-times"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                <h2>Gallery</h2>
                                </div>
                                <div class="box alt">
                                    <div class="row gtr-50 gtr-uniform">
                                        @foreach($images->chunk(2) as $chunk)
                                            <div class="row">
                                            @foreach($chunk as $vary)
                                                <div class="col-md-2"><img src="{{asset('storage/images/'.$event->categoria.'/'.$event->titolo.'/'.$vary->path)}}" alt="img gallery" width="100px" height="100px" /></div>
                                            @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h2>Aggiungi Immagini</h2>
                                </div>
                                <form action="{{route('updatevent')}}" method="post" id="editForm">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$event->id}}">
                                    <div class="form-group">
                                        <label>Immagine di copertina (cover)</label>
                                        <input type="file" id="exampleInputFile" name="cover">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Immagine di destra (right)</label>
                                        <input type="file" id="exampleInputFile" name="right">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Immagine di sinistra (left)</label>
                                        <input type="file" id="exampleInputFile" name="left">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Gallery completa</label>
                                        <input type="folder" id="exampleInputFile" name="gallery">
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
