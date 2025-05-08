@extends("layouts.galaxies")


@section("title","Cosmic Phenomena")

@section('content')

<a href="{{route('phenomena.create')}}" class="btn btn-primary"> Add a new Phenomenon</a>

<div>
    @foreach($phenomena as $phen)
        <h1 class="">{{$phen->name}}</h1>
        <a href="{{route('phenomena.show', $phen->id)}}" class="btn btn-primary">More Details</a>

    @endforeach
</div>


@endsection