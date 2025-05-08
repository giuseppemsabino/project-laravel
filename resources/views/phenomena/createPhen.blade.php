@extends('layouts.galaxies')

@section('title', "Add a New Phenomenon")


@section('content')
    <form action="" method="POST" enctype="multipart/form-data" class="row gap-3">
        @csrf

        <div class="col-12">
            <label></label>
        </div>
    </form>
@endsection