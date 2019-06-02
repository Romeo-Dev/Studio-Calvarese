@extends('layouts.app')
@section('home')

            <!-- Content -->
            <section>

                <div class="row gtr-50 gtr-uniform">
                <header class="main" id="header">
                    <h1 class="major sol-header-post">{{$posts['0']->titolo}}</h1>
                </header>
                </div>

                <div class="row gtr-50 gtr-uniform">
                <span class="image fit"><img src="{{asset('storage/images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$images['cover']->path)}}" alt="" /></span>
                <p class="image fit">{!!$posts['0']->paragraph_1!!}</p>
                </div>

                <!---------------------------primo sottotitolo-->
                <div class="row gtr-50 gtr-uniform">
                <div class="box custom-hr">
                <div class="custom-text-subtitle">{{$posts['0']->subtitle}}</div>
                </div>
                    </div>
                <div class="row gtr-50 gtr-uniform">
                <p><span class="image left col-3"><img src="{{asset('storage/images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$images['left']->path)}}" alt="" /></span>
                    <span class="col-9-large">{!!$posts['0']->paragraph_2!!}</span>
                </p>
                </div>

                <!----------------------------secondo sottotitolo-->
                <div class="row gtr-50 gtr-uniform">
                    <div class="box custom-hr">
                        <div class="custom-text-subtitle-left">{{$posts['0']->in_conclusion}}</div>
                    </div>
                </div>
                <div class="row gtr-50 gtr-uniform">
                <p><span class="image right col-3"><img src="{{asset('storage/images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$images['right']->path)}}" alt="img" /></span>
                   <span class="col-9-large"> {!!$posts['0']->paragraph_3!!}</span>
                </p>
                </div>

                <!----------------------------gallery-->
                <div class="row gtr-50 gtr-uniform">
                    <div class="box custom-hr">
                        <div class="custom-text-subtitle-gallery">Gallery</div>
                    </div>
                </div>
                <div class="box alt">
                    <div class="row gtr-50 gtr-uniform">
                        @foreach($images['various']->chunk(3) as $chunk)
                            @foreach($chunk as $vary)
                        <div class="col-4"><a href="{{asset('storage/images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$vary->path)}}" data-lightbox="myGallery"><span class="image fit"><img src="{{asset('storage/images/'.$posts['0']->categoria.'/'.$posts['0']->titolo.'/'.$vary->path)}}" alt="img gallery"/></span></a></div>
                            @endforeach
                            @endforeach
                 </div>
                </div>


                <h2 id="comment">Commenti</h2>

                <dl>
                    @foreach($comments as $comment)
                    <dt><b><i>{{$comment->name}}</i> {{$comment->surname}} </b><br>Data: {{date('d F Y',strtotime($comment->timestamp))}}</dt>
                    <dd>
                        <div class="box">
                            <p>{{$comment->text}}</p>
                        </div>
                    </dd>
                    @endforeach
                </dl>
            @if(auth()->id() != null)
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
            @else
                <div id="header">
                    <h3 class="major"><a href="{{route('login')}}">Per poter commentare effettua il <i>login</i></a></h3>
                </div>
            @endif
        </div>
    </div>


@endsection
