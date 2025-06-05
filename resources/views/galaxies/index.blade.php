@extends("layouts.galaxies")

@section("title","Galaxies")


@section('content')

<a href="{{route('galaxies.create')}}" class="btn btn-primary"> Add a new Galaxy</a>

<table class="table table-striped align-middle">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($galaxies as $galaxy)
        <tr>
            <td>{{ $galaxy->name }}</td>
            <td>{{ $galaxy->type->name }}</td>
            <td>
                <img src="{{ asset('storage/' . $galaxy->image) }}" alt="{{ $galaxy->name }}" class="img-fluid" style="width: 100px;">
            </td>
            <td>
                <a href="{{ route('galaxies.show', $galaxy->id) }}" class="btn btn-primary">More Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection