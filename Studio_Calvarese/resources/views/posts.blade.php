@extends('layouts.app')
@section('home')

            <!-- Content -->
            <section>

                <header class="main">
                    <h1>{{$post['0']->titolo}}</h1>
                    <h4>Info post</h4>
                    <ul class="alt">
                        <li><strong>Categoria:  </strong>{{$category['0']->nome}}</li>
                        <li><strong>Autore: </strong><span>{{$author['0']->nickname}}</span></li>
                        <li><strong>Societa: </strong><span>{{$societa['0']->societa}}</span></li>

                    </ul>
                </header>

                <span class="image fit"><img src="{{asset('images/'.$post['0']->titolo.'/'.$post['0']->image)}}" alt="" width="500" height="400" /></span>

                <p>{{$post['1']->descrizione}}</p>
                <hr class="major" />

                <h2>{{$post['1']->sottotitolo}}</h2>

                <p><span class="image left"><img src="{{asset('images/'.$post['0']->titolo.'/'.$post['1']->image)}}" height="250" /><hr class="major" /></span>
                    {{$post['1']->paragrafo}}
                </p>
                <hr class="major" />

                <h2>{{$post['1']->conclusione}}</h2>

                <p><span class="image right"><img src="{{asset('images/'.$post['0']->titolo.'/'.$post['2']->image)}}" alt="" height="250"/><hr class="major" /></span>
                    {{$post['1']->paragraph_finale}}</p>
                <hr class="major" />



                <h2>Gallery</h2>
                <hr>
                <div class="box alt">
                    <div class="row gtr-50 gtr-uniform">
                <div class="col-4"><span class="image fit"><img src="{{asset('images/'.$post['0']->titolo.'/'.$post['0']->image)}}" alt="{{$post['0']->image}}" height="250"/></span></div>
                <div class="col-4"><span class="image fit"><img src="{{asset('images/'.$post['0']->titolo.'/'.$post['1']->image)}}" alt="{{$post['1']->image}}" height="250"/></span></div>
                <div class="col-4"><span class="image fit"><img src="{{asset('images/'.$post['0']->titolo.'/'.$post['2']->image)}}" alt="{{$post['2']->image}}" height="250"/></span></div>
                    </div>
                </div>

            </section>

        </div>
    </div>


@endsection

@section('side')

    <!-- Section -->
    <section>
        <header class="major">
            <h2>Ante interdum</h2>
        </header>
        <div class="mini-posts">
            <article>
                <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
            </article>
            <article>
                <a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
            </article>
            <article>
                <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
            </article>
        </div>
        <ul class="actions">
            <li><a href="#" class="button">More</a></li>
        </ul>
    </section>

    <!-- Section -->
    <section>
        <header class="major">
            <h2>Get in touch</h2>
        </header>
        <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        <ul class="contact">
            <li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
            <li class="fa-phone">(000) 000-0000</li>
            <li class="fa-home">1234 Somewhere Road #8254<br />
                Nashville, TN 00000-0000</li>
        </ul>
    </section>


    </div>
    </div>

    </div>


@endsection
