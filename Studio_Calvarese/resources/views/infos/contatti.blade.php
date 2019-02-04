@extends('layouts.app')
@section('home')

    <header id="header">
        <h1 class="major">Contatti</h1>
    </header>
    <section>
        <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        <ul class="contact">
            <li href="#" class="icon fa-facebook"><a href="#"> Facebook</a></li>
            <li href="#" class="icon fa-instagram"><a href="#"> Instagram</a></li>
            <li class="fa-envelope-o"><a href="mailto:fotocalvarese@gmail.com">fotocalvarese@gmail.com</a></li>
            <li class="fa-phone">(000) 000-0000</li>
            <li class="fa-home">1234 Somewhere Road #8254<br />
                Nashville, TN 00000-0000</li>
        </ul>
    </section>

    <!-- Form -->
    <h3>Lascia un Messaggio</h3>

    <form method="post" action="#">
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
            </div>
            <!-- Break -->
            <div class="col-12">
                <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
            </div>
            <!-- Break -->
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Send Message" class="primary" /></li>
                    <li><input type="reset" value="Reset" /></li>
                </ul>
            </div>
        </div>
    </form>
    </div>
    </div>
@endsection
