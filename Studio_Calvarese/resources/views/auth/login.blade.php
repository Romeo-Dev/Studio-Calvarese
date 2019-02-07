@extends('layouts.app')
@section('home')

    <header id="header"><h1 class="major">Login</h1></header>

                <section>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <input id="demo-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                            </div>
                        </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        <br>
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <input id="demo-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                            </div>
                        </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        <br>
                        <div class="col-12">
                            <input type="submit" value="Login" class="primary">
                            <a href="{{route('register')}}" class="button primary">Register now</a>
                        </div>

                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                    </form>



</section>
    </div>
    </div>
@endsection
