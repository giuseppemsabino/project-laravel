@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Login Successful
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Welcome {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in! Now you can edit the universe.') }}
                </div>
            </div>
        </div>
        <a href="{{ route('galaxies.index') }}" class="btn btn-outline btn-lg mt-4">
            🔭 Go to the Archive
        </a>
    </div>
</div>
@endsection
