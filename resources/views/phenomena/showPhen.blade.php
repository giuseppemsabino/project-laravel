@extends('layouts.galaxies')

@section('title', $phenomenon->name)

@section('content')
<div class="gap-3 d-flex flex-column flex-md-row">
    <div class="col-12 col-md-6">

        <img class="img-fluid w-100 " src="{{asset('storage/'.$phenomenon->image)}}" alt="image">
    </div>
    <div>

        {{$phenomenon->description}}
    </div>
</div>

<div class="d-flex flex-column flex-md-row gap-3 justify-content-center my-4">


    <a href="{{route('phenomena.edit', $phenomenon->id)}}" class="btn btn-dark ">Edit</a>

    
    <x-delete-modal>
        <x-slot:title>Are sure that you want to delete this phenomenon?</x-slot:title>
        <x-slot:body>This Phenomenon will be deleted definitle from The Cosmic Archive</x-slot:body>
        <x-slot:action>{{route('phenomena.destroy', $phenomenon)}}</x-slot:action>
    </x-delete-modal>
</div>
@endsection