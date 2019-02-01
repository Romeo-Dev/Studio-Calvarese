@extends('layouts.app')
@section('home')
            <header id="header"><h1 class="major">Registrazione</h1></header>


            <!-- Form -->
            <section>
                <form method="post" action="#">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <input type="email" name="demo-email" id="demo-email" value="" placeholder="Nome e Cognome" />
                        </div>
                    </div>
                    <br>
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                        </div>
                    </div>
                    <br>
                    <div class="row gtr-uniform">
                        <div class="col-3 col-12-xsmall">
                            <input type="password" name="demo-password" id="demo-password" value="" placeholder="Password" />
                        </div>
                        <div class="col-3 col-12-xsmall">
                            <input type="password" name="demo-password" id="demo-password" value="" placeholder="Conferma Password" />
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <input type="submit" value="Register" class="primary" />
                    </div>
        </form>
    </section>

</div>
</div>


@endsection
