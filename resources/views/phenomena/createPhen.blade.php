@extends('layouts.galaxies')

@section('title', "Add a New Phenomenon")


@section('content')
<form action="{{route('phenomena.store')}}" method="POST" enctype="multipart/form-data" class="row gap-3">
    @csrf

    <div class="col-12">
        <label for="name" class="form-label">Name of the Phenomenon</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description"></textarea>
    </div>
    <div class="col-12">
        <label for="image" class="form-label">Insert Phenomenon Image</label>
        <input class="form-control" type="file" name="image" id="image">
    </div>
    <div class="col-12 text-center">
        <input type="submit" value="Create" class="btn btn-success">
    </div>

</form>
@endsection