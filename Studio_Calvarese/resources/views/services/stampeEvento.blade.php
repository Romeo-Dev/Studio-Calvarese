@extends('layouts.app')
@section('home')
    <header id="header">
        <h1 class="major">{{$stampe[0]->titolo}}</h1>
    </header>

    <br>


    <!-- Table -->
    <h3>Scegliere tra le immagini quali si desiderano stampare pigiando i vari bottoni per checkare e decheckare le foto
    ed infine premere il bottone a fine tabella per inviarle a piero cosi che puoi iniziare il suo lavoro</h3>
    <br>

    <form action="{{route('sendStamp')}}" method="post">
        @csrf
    <div class="table-wrapper">
        <table>
            <thead>
            <tr>
                <th>Immagine</th>
                <th>Stampe</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($stampe as $stampa)
                <td><img src="{{asset('images/'.$stampa->categoria.'/'.$stampa->titolo.'/'.$stampa->path)}}" alt="" width="50%" height="50%"></td>
                <td><input type="checkbox" id="" name="" value="yes">
                    <label for="">Stampe</label>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <br>
        <input type="submit" value="Manda Stampe" class="primary" />
    </div>
    </form>

    </div>
</div>
    @endsection
