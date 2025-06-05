@extends('layouts.galaxies')

@section('title', $phenomenon->name)

@section('content')
<form action="{{route('phenomena.update', $phenomenon->id)}}" method="POST" enctype="multipart/form-data" class="row gap-3">
    @csrf
    @method('PUT')

    <div class="col-12">
        <label for="name" class="form-label">Name of the Phenomenon</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$phenomenon->name}}">
    </div>

    <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description">{{$phenomenon->description}}</textarea>
    </div>
    <div class="col-12">
        <label for="image" class="form-label">Insert Phenomenon Image</label>
        <input class="form-control" type="file" name="image" id="image">
        
        @if($phenomenon->image)
        <div class="d-flex justify-content-center">

            <img class="img-fluid w-30 my-2" src="{{asset('storage/'.$phenomenon->image)}}" alt="image">
        </div>
        @endif
    </div>
    <div class="col-12 text-center">
        <input type="submit" value="Update" class="btn btn-success">
    </div>

</form>
@endsection