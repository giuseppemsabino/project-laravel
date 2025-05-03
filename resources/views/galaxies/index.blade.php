@extends("layouts.galaxies")

@section("title","The Cosmic Archive")


@section('content')






<div class="d-flex gap-3 row flex-wrap justify-content-around ">
    @foreach($galaxies as $galaxy)
    <div class="card col-3">

        <img src="..." class="card-img-top" alt="...">

        <div class="card-body text-center">

            <h5 class="card-title">{{$galaxy['name']}}</h5>

            <p class="card-text"><strong>{{$galaxy->type->name}}</strong></p>

            <a href="{{route('galaxies.show', $galaxy->id)}}" class="btn btn-primary">More Details</a>

        </div>
    </div>
    @endforeach
</div>
@endsection