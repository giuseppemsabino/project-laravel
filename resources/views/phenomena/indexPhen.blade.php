@extends("layouts.galaxies")


@section("title","Cosmic Phenomena")

@section('content')

<a href="{{route('phenomena.create')}}" class="btn btn-primary"> Add a new Phenomenon</a>

<table class="table table-striped ">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($phenomena as $phen)
        <tr>
            <td>{{ $phen->name }}</td>
            <td>
                @if($phen->image)
                    <img src="{{ asset('storage/' . $phen->image) }}" class="img-fluid" style="max-width: 100px;" alt="phenomenon image">
                @else
                    <em>No image</em>
                @endif
            </td>
            <td>
                <a href="{{ route('phenomena.show', $phen->id) }}" class="btn btn-sm btn-primary">More Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection