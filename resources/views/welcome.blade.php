@extends('layouts.app')

@section('content')
<style>
   
</style>

<div class="cosmic-bg d-flex align-items-center justify-content-center text-light">
    <div class="cosmic-overlay"></div>

    <div class="cosmic-content text-center p-5 rounded shadow" style="max-width: 700px;">
        <h1 class="display-4 fw-bold mb-4">
             Welcome to <span class="cosmic-welcome">The Cosmic Archive</span> Control Center

        </h1>

        <p class="lead">
            Explore the wonders of the universe. The Cosmic Archive is your gateway to galaxies, phenomena, and mysteries beyond imagination.
        </p>

        <a href="{{ route('galaxies.index') }}" class="btn btn-outline-light btn-lg mt-4">
            🔭 Go to the Archive
        </a>
    </div>
</div>
@endsection
