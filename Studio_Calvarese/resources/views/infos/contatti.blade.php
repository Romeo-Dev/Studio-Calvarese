@extends('layouts.app')
@section('home')

    <header id="header">
        <h1 class="major">Contatti</h1>
    </header>
    <section>
        <p>Lo Studio Fotografico Calvarese si trova in <strong>Via Pace 10</strong> a <strong>San Benedetto dei Marsi (AQ)</strong>, puoi contattarci al numero telefonico <strong>0863 867 767</strong> oppure compilando il seguente form:</p>
        <ul class="contact">
            <li href="#" class="icon fa-facebook"><a href="https://www.facebook.com/StudiofotograficoCalvarese/" target="_blank"><h5> Facebook</h5></a></li>
            <li href="#" class="icon fa-instagram"><a href="https://www.instagram.com/studio_fotografico_calvarese/?hl=it&fbclid=IwAR24JO5EwH9-IKbDrFygLfcLsO6iBnE3N4SYsCLl9vTZHDv8MJO838K9kLs" target="_blank"><h5> Instagram</h5></a></li>
            <li class="fa-envelope-o"><a href="mailto:fotocalvarese@gmail.com"><h5>fotocalvarese@gmail.com</h5></a></li>
            <li class="fa-phone"><h5>0863 867767</h5></li>
            <li class="fa-home"><a href="https://www.google.com/maps/place/Via+Pace,+10,+67058+San+Benedetto+dei+Marsi+AQ/@42.0052982,13.6251422,3a,75y,229.02h,87.66t/data=!3m6!1e1!3m4!1s--kAg7bokC_HbzHceHrR4w!2e0!7i13312!8i6656!4m5!3m4!1s0x13301ed116164e7f:0xa06c719d14975f14!8m2!3d42.003812!4d13.628592" target="_blank"/><h5>Via Pace 10 <br />
                    San Benedetto dei Marsi (AQ)</h5> </li></a>
        </ul>
    </section>

    <!-- Form -->
    <h3>Lascia un Messaggio</h3>
        @auth
            <form method="post" action="{{route('sendMessageByAuth')}}">
                @csrf
                <div class="row gtr-uniform">
                    <input type="hidden" name="name" id="name" value="{{Auth::user()->name}}">
                    <input type="hidden" name="surname" id="surname" value="{{Auth::user()->surname}}">
                    <input type="hidden" name="email" id="email" value="{{Auth::user()->email}}">
                    <!-- Break -->
                    <div class="col-12">
                        <textarea name="message" id="message" placeholder="Enter your message" rows="6" required></textarea>
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
        @endauth

    @guest
    <form method="post" action="{{route('sendMessage')}}">
        @csrf
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <input type="text" name="nome" id="nome" value="" placeholder="Name"  required/>
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="cognome" id="cognome" value="" placeholder="Cognome"  required/>
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="email" name="email" id="email" value="" placeholder="Email" required/>
            </div>
            <!-- Break -->
            <div class="col-12">
                <textarea name="message" id="message" placeholder="Enter your message" rows="6" required></textarea>
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
    @endguest
    </div>
    </div>
@endsection
