@extends('layouts.app')
@section('home')

    <header id="header"><h1 class="major">Info Profilo</h1></header>

    <section>
        <form method="POST" action="{{ route('agg_profilo') }}">
            @csrf
            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <ul class="alt">
                        <li><b>Nome:</b> <i>{{Auth::user()->name}} </i></li>
                        <li><b>Cognome:</b> <i>{{Auth::user()->surname}} </i></li>
                        <li><b>Email:</b> <i>{{Auth::user()->email}} </i></li>
                    </ul>
                </div>
            </div>
            <br>

            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="new_email" value="{{ old('email') }}" placeholder="Cambia Email" >
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <br>

            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="new_password" placeholder="Cambia Password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <br>

            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Conferma Nuova Password">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <br>

            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <input type="submit" value="Aggiorna Profilo" class="primary" />
                </div>
            </div>
        </form>
    </section>
    </div>
    </div>

@endsection
