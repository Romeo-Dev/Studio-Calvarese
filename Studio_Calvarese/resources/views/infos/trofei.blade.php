@extends('layouts.app')
@section('home')

    <header id="header">
        <h1 class="major">Trofei</h1>
    </header>
    <!-- Section -->
    @foreach($trophies as $trophy)
    <section>
        <dl>
            <span class="image fit"><img src="{{asset('storage/images/Trophies/'.$trophy->trofeo)}}" alt="" /></span>
            <dt>{{date('Y',strtotime($trophy->conseguimento))}}</dt><dt>{{$trophy->title}}</dt>
            <dd>
                <p>{{$trophy->description}}</p>
            </dd>
        </dl>
    </section>
    @endforeach
    </div>
    </div>
@endsection
