@extends('layouts.app')
@section('home')

            <!-- Content -->
            <section>

                <header class="main">
                    <h1>{{$posts['0']->titolo}}</h1>
                    <h4>Info post</h4>
                    <ul class="alt">
                        <li><strong>Categoria:  </strong>{{$posts['0']->categoria}}</li>
                        <li><strong>Autore: </strong><span>{{$posts['0']->name}} </span><strong>{{$posts['0']->surname}}</strong></li>
                        <li><strong>Date: </strong><span>{{date('d F Y',strtotime($posts['0']->giorno))}}</span></li>

                    </ul>
                </header>

                <span class="image fit"><img src="{{asset('images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$images['cover']->path)}}" alt="img 1" /></span>

                <p>{{$posts['0']->paragraph_1}}</p>
                <hr class="major" />

                <h2>{{$posts['0']->subtitle}}</h2>

                <p><span class="image left"><img src="{{asset('images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$images['left']->path)}}" alt="img left" /><hr class="major" /></span>
                    {{$posts['0']->paragraph_2}}
                </p>
                <hr class="major" />

                <h2>{{$posts['0']->in_conclusion}}</h2>

                <p><span class="image right"><img src="{{asset('images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$images['right']->path)}}" alt="img" /><hr class="major" /></span>
                    {{$posts['0']->paragraph_3}}</p>
                <hr class="major" />



                <h2>Gallery</h2>
                <hr>
                <div class="box alt">
                    <div class="row gtr-50 gtr-uniform">
                        @foreach($images['various']->chunk(3) as $chunk)
                            @foreach($chunk as $vary)
                        <div class="col-4"><a href="{{asset('images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$vary->path)}}" data-lightbox="myGallery"><span class="image fit"><img src="{{asset('images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$vary->path)}}" alt="img gallery" /></span></a></div>
                            @endforeach
                            @endforeach
                 </div>
                </div>

            </section>

        </div>
    </div>


@endsection

{{--@section('side')

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


    </div>--}}
{{--
    </div>

    </div>


@endsection
--}}
