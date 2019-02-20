@extends('layouts.app')
@section('home')

    <header id="header"><h1 class="major">Chi Siamo</h1></header>
<!-- Content -->
<section>
    <span class="image main"><img src="{{asset('storage/images/logo/'.$about->immagine)}}" alt="" /></span>
    <h3>CHI SIAMO</h3>
    <p>
        {!!$about->chi_siamo !!}
    </p>

    <br>
    <blockquote>
        <h3>ABOUT US</h3>
            {!!$about->about_us!!}
        </blockquote>

</section>
</div>
</div>
@endsection
