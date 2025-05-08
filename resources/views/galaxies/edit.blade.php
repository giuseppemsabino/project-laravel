@extends('layouts.galaxies')

@section('title', $galaxy->name)


@section('content')


<form action="{{route('galaxies.update', $galaxy)}}" method="POST" enctype="multipart/form-data" class="row g-3">
    @csrf
    @method('PUT')

    <div class="col-12">
        <label for="name" class="form-label">Name of the Galaxy</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$galaxy->name}}">
    </div>
    <div class="col-md-4">
        <label for="diameter" class="form-label">Diameter (Size in Light Years)</label>
        <input type="number" class="form-control" name="diameter" id="diameter" value="{{$galaxy->diameter}}">
    </div>
    <div class="col-md-4">
        <label for="mass" class="form-label">Mass (Estimated mass in Solar Masses)</label>
        <input type="number" class="form-control" name="mass" id="mass" value="{{$galaxy->mass}}">
    </div>
    <div class="col-md-4">
        <label for="age" class="form-label">Age (Estimated age in Billions of Years)</label>
        <input type="number" class="form-control" name="age" id="age" value="{{$galaxy->age}}">
    </div>
    <div class="col-12">
        <label for="type_id" class="form-label">Type of Galaxy (Shape)</label>
        <select name="type_id" class=" form-control" id="type_id">
            @foreach($types as $type)
            <option value="{{$type->id}}" {{$galaxy->type_id == $type->id ? 'selected' : ''}}>{{$type->name}}</option>
            @endforeach
        </select>

    </div>


    <div class="row my-2">
        @foreach($phenomena as $phenomenon)
        <div class="col-md-4 mb-2">
            <div class="form-check">
                <input type="checkbox" name="phenomena[]" value="{{ $phenomenon->id }}"
                    class="form-check-input" id="phenomenon-{{ $phenomenon->id }}" {{$galaxy->phenomena->contains($phenomenon->id) ? 'checked' : ''}}>
                <label for="phenomenon-{{ $phenomenon->id }}" class="form-check-label">
                    {{ $phenomenon->name }}
                </label>
            </div>
        </div>
        @endforeach
    </div>

    <div class="col-12">
    <label for="image" class="form-label">Insert Galaxy Image</label>
    <input class="form-control" type="file" name="image" id="image">
        @if($galaxy->image)
            <img class="img-fluid w-25" src="{{asset('storage/'.$galaxy->image)}}" alt="image">
        @endif
    </div>

    <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description">{{$galaxy->description}}</textarea>
    </div>

    <div class="col-12 text-center">
        <a href="{{route('galaxies.show', $galaxy->id)}}" class="btn btn-primary">Go Back</a>
        <input type="submit" value="Update" class="btn btn-success">

    </div>
</form>

@endsection