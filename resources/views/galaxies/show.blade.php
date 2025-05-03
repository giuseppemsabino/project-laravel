@extends('layouts.galaxies')

@section('title')
{{$galaxy->name}}
@endsection

@section('content')
 <h1>{{$galaxy->description}}</h1>
 


 @foreach($galaxy->phenomena as $phenomenon)
    <p class="badge bg-danger">{{$phenomenon->name}}</p>
 @endforeach



@endsection