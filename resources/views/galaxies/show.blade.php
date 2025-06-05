@extends('layouts.galaxies')

@section('title', $galaxy->name)


@section('content')
<div class="d-flex flex-column">

  <img class="img-fluid w-25" src="{{asset('storage/'.$galaxy->image)}}" alt="">
  <p>{{$galaxy->description}}</p>


  <div class="phenomena-section">

    @foreach($galaxy->phenomena as $phenomenon)
    <p class="badge bg-success">{{$phenomenon->name}}</p>
    @endforeach
  </div>
  <div class="edit-btn d-flex gap-3 justify-content-center">

    <a href="{{route('galaxies.edit', $galaxy)}}" class="btn btn-dark">Edit</a>

    <x-delete-modal>
      <x-slot:title>Are sure that you want to delete this Galaxy?</x-slot:title>
      <x-slot:body>This Galaxy will be deleted definitle from The Cosmic Archive</x-slot:body>
      <x-slot:action>{{route('galaxies.destroy', $galaxy)}}</x-slot:action>
    </x-delete-modal>
  </div>


  @endsection