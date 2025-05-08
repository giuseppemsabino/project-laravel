@extends('layouts.galaxies')

@section('title', "Add a New Galaxy")

@section('content')


<form action="{{route('galaxies.store')}}" method="POST" enctype="multipart/form-data" class="row g-3">
    @csrf

    <div class="col-12">
        <label for="name" class="form-label">Name of the Galaxy</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="col-md-4">
        <label for="diameter" class="form-label">Diameter (Size in Light Years)</label>
        <input type="number" class="form-control" name="diameter" id="diameter">
    </div>
    <div class="col-md-4">
        <label for="mass" class="form-label">Mass  (Estimated mass in Solar Masses)</label>
        <input type="number" class="form-control" name="mass" id="mass">
    </div>
    <div class="col-md-4">
        <label for="age" class="form-label">Age (Estimated age in Billions of Years)</label>
        <input type="number" class="form-control" name="age" id="age">
    </div>
    <div class="col-12">
        <label for="type_id" class="form-label">Type of Galaxy (Shape)</label>
        <select name="type_id" class=" form-control" id="type_id">
            <option value="...">...</option>
            @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>

    </div>
    

    <div class="row my-2">
        @foreach($phenomena as $phenomenon)
        <div class="col-md-4 mb-2">
            <div class="form-check">
                <input type="checkbox" name="phenomena[]" value="{{ $phenomenon->id }}"
                    class="form-check-input" id="phenomenon-{{ $phenomenon->id }}">
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
    </div>

    <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description"></textarea>
    </div>

    <div class="col-12 text-center">
        <input type="submit" value="Create" class="btn btn-success">
    </div>
</form>

@endsection