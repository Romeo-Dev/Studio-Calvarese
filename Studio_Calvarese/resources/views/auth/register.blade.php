@extends('layouts.app')
@section('home')

    <header id="header"><h1 class="major">Register</h1></header>

                <section>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nome" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>

                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <input id="name" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" placeholder="Cognome"  >
                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>

                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" >
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
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
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
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
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
                                <input type="submit" value="Register" class="primary" />
                            </div>
                        </div>
                    </form>
                </section>
                </div>
            </div>

@endsection
