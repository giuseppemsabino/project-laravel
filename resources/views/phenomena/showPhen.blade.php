@extends('layouts.galaxies')

@section('title', $phenomenon->name)

@section('content')
<div>
    {{$phenomenon->description}}
</div>
@endsection