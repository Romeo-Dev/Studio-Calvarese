
@extends('layouts.app')
@section('home')
            <header id="header"><h1 class="major">Login</h1></header>

            <!-- Form -->
            <section>
                <form method="post" action="#">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                        </div>
                    </div>
                    <br>
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <input type="password" name="demo-password" id="demo-password" value="" placeholder="Password" />
                        </div>
                        <div class="col-12">
                            <input type="submit" value="Login" class="primary" />

                        </div>
                        <p>Non sei registrato? fallo immediatamente <a href="{{route('registrazione')}}">Registrati</a></p>
                    </div>
                </form>
            </section>
    </div>
    </div>
    @endsection
