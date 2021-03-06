@extends('dashboard.mydash')
@section('content')

    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Profilo Admin
                @if(session('alert'))
                    <div class="alert alert-info">
                        <small>{{session('alert')}}</small>
                    </div>
                    @endif
            </h1>
        </div>

        <div id="page-inner">
            <div class="row">
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="card-title">Nome: <i>{{Auth::user()->name}}</i></div>
                        </div>
                        <div class="panel-heading">
                            <div class="card-title">Cognome: <i>{{Auth::user()->surname}}</i></div>
                        </div>
                        <div class="panel-heading">
                            <div class="form-group">Email:  <i>{{Auth::user()->email}}</i></div>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{ route('agg_profiloadmin') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="new_email">Cambia Email</label>
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="new_email" id="email" placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="new_password">Cambia Password</label>
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="new_password" id="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password">Conferma Nuova Password</label>
                                    <input type="password" class="form-control" name="password_confirmation"  placeholder="Password" >
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-refresh"> Update</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
