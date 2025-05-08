@extends("layouts.galaxies")


@section("title","Cosmic Phenomena")

@section('content')

<div>
    @foreach($phenomena as $phen)
        <h1>{{$phen->name}}</h1>
    @endforeach
</div>


@endsection