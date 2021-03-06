@extends('layouts.app')
@section('home')


    <header id="header">
        <a href="#" class="logo"><strong>{{$section->categoria}}</strong></a>
        </header>

    @foreach($all as $post)
        @if($post->paragraph_1 != null)
    <section id="banner">
        <div class="content">

                <h1>{{$post->titolo}}</h1>
                <p><strong>Date: </strong>{{date('d F Y',strtotime($post->giorno))}}</p>
            </header>
            <p>{!! str_limit($post->paragraph_1,$limit=355,$end='...') !!}</p>
            <ul class="actions">
                <li><a href="{{ route('posts',['id'=>$post->id]) }}" class="button big">Learn More</a></li>
            </ul>
        </div>
        <span class="image object">
            <a href="{{ route('posts',['id'=>$post->id]) }}"><img src="{{asset('storage/images/'.$post->categoria.'/'.$post->titolo.'/'.$post->path)}}" alt="" /></a>
        </span>
    </section>
    @endif
    @endforeach
    <hr>
    {{$all->links('vendor/pagination/simple-default')}}

    </div>
    </div>
    @endsection
