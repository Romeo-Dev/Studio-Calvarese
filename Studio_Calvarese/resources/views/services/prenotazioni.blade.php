@extends('layouts.app')
@section('home')

    @if(session('alertdanger'))
        <div class="alert alert-danger" role="alert">
            {{session('alertdanger')}}
        </div>
    @elseif(session('alertsucc'))
        <div class="alert alert-success" role="alert">
            {{session('alertsucc')}}
        </div>
    @elseif(session('alert'))
        <div class="alert alert-warning" role="alert">
            {{session('alert')}}
        </div>
    @endif

    <header id="header">
        <h1 class="major">Gestione Prenotazioni</h1>
    </header>

    <br>

    <div class="table-wrapper">
        <table style="border-collapse:separate">
            <thead>
            <tr>
                <th>Data</th>
                <th>Ora</th>
                <th>Stato</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                @foreach($prenotazioni as $prenotazione)
                    <td>{{date('d F Y',strtotime($prenotazione->appuntamento))}}</td>
                    <td>{{date('H:i',strtotime($prenotazione->ora))}}</td>
                    <td>{{$prenotazione->stato}}</td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>


    <h2 class="major">Richiedi Appuntamento</h2>
        <form method="POST" action="{{route('askforPrenotation')}}">
            @csrf
            <input type="submit" value="Richiedi Appuntamento" class="primary" />
        </form>



    </div>
    </div>
@endsection
