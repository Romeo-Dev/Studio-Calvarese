@extends('layouts.app')
@section('home')

            <!-- Content -->
            <section>

                <header class="main" id="header">
                    <h1 class="major">{{$posts['0']->titolo}}</h1>
                </header>
                <br>
                    <ul class="alt">
                        <li><strong>Categoria:  </strong>{{$posts['0']->categoria}}</li>
                        <li><strong>Autore: </strong><span>{{$posts['0']->name}} </span><strong>{{$posts['0']->surname}}</strong></li>
                        <li><strong>Date: </strong><span>{{date('d F Y',strtotime($posts['0']->giorno))}}</span></li>

                    </ul>


                <span class="image fit"><img src="{{asset('images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$images['cover']->path)}}" alt="" /></span>

                <p>{{$posts['0']->paragraph_1}}</p>
                <hr class="major" />

                <h2>{{$posts['0']->subtitle}}</h2>

                <p><span class="image left"><img src="{{asset('images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$images['left']->path)}}" alt="" /></span>
                    {{$posts['0']->paragraph_2}}
                </p>
                <hr class="major" />

                <h2>{{$posts['0']->in_conclusion}}</h2>

                <p><span class="image right"><img src="{{asset('images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$images['right']->path)}}" alt="img" /></span>
                    {{$posts['0']->paragraph_3}}</p>
                <hr class="major" />



                <h2>Gallery</h2>

                <div class="box alt">
                    <div class="row gtr-50 gtr-uniform">
                        @foreach($images['various']->chunk(3) as $chunk)
                            @foreach($chunk as $vary)
                        <div class="col-4"><a href="{{asset('images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$vary->path)}}" data-lightbox="myGallery"><span class="image fit"><img src="{{asset('images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$vary->path)}}" alt="img gallery" /></span></a></div>
                            @endforeach
                            @endforeach
                 </div>
                </div>

                <hr>
                <h2>Commenti</h2>

                <dl>
                    @foreach($comments as $comment)
                    <dt><b><i>{{$comment->name}}</i> {{$comment->surname}} </b><br>Data: {{$comment->timestamp}}</dt>
                    <dd>
                        <div class="box">
                            <p>{{$comment->text}}</p>
                        </div>
                    </dd>
                    @endforeach
                </dl>

                @auth

                <div id="header">
                <h3 class="major">Commenta anche tu</h3>
                </div>
                <br>
                <form method="post" action="{{route('comments')}}">
                        @csrf
                    <input type="hidden" name="post_id" id="post_id" value="{{$posts['0']->id}}">
                        <div class="col-12">
                            <textarea name="text" id="text" placeholder="Enter your message" rows="6"></textarea>
                        </div>
                    <br>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Commenta" class="primary" /></li>
                                <li><input type="reset" value="Reset" /></li>
                            </ul>
                        </div>
                </form>

            </section>
            @endauth

        </div>
    </div>


@endsection
