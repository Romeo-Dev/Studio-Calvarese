@extends('layouts.app')
@section('home')

    <header id="header">
        <h1 class="major">Contatti</h1>
    </header>
    <section>
        <p>Lo Studio Fotografico Calvarese si trova in <strong>Via Pace 10</strong> a <strong>San Benedetto dei Marsi (AQ)</strong>, puoi contattarci al numero telefonico 0863867767 oppure compilando il seguente form:</p>
        <ul class="contact">
            <li href="#" class="icon fa-facebook"><a href="#"> Facebook</a></li>
            <li href="#" class="icon fa-instagram"><a href="#"> Instagram</a></li>
            <li class="fa-envelope-o"><a href="mailto:fotocalvarese@gmail.com">fotocalvarese@gmail.com</a></li>
            <li class="fa-phone">0863 867767</li>
            <li class="fa-home"><a href="https://www.google.com/maps/place/Via+Pace,+10,+67058+San+Benedetto+dei+Marsi+AQ/@42.0052982,13.6251422,3a,75y,229.02h,87.66t/data=!3m6!1e1!3m4!1s--kAg7bokC_HbzHceHrR4w!2e0!7i13312!8i6656!4m5!3m4!1s0x13301ed116164e7f:0xa06c719d14975f14!8m2!3d42.003812!4d13.628592" target="_blank"/>Via Pace 10  <br />
                    San Benedetto dei Marsi (AQ)</li></a>
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
