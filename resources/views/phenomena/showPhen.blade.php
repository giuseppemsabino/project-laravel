@extends('layouts.galaxies')

@section('title', $phenomenon->name)

@section('content')
<div>
    {{$phenomenon->description}}
    <img class="img-fluid w-25" src="{{asset('storage/'.$phenomenon->image)}}" alt="image">
</div>
<a href="{{route('phenomena.edit', $phenomenon->id)}}" class="btn btn-primary">Edit</a>
@endsection