@extends('layouts.galaxies')

@section('title', $galaxy->name)


@section('content')
<div class="d-flex flex-column">

   <h1>{{$galaxy->description}}</h1>
   
   
   <img class="img-fluid w-25" src="{{asset('storage/'.$galaxy->image)}}" alt="">
   <div class="phenomena-section">

      @foreach($galaxy->phenomena as $phenomenon)
      <p class="badge bg-success">{{$phenomenon->name}}</p>
      @endforeach
   </div>
   <div class="edit-btn">

      <a href="{{route('galaxies.edit', $galaxy)}}" class="btn btn-primary">Edit</a>

      <!-- Button trigger modal -->
   <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
     Delete
   </button>
   </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are sure that you want to delete this galaxy?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        This Galaxy will be deleted definitle from The Cosmic Archive
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go Back</button>
       <form action="{{route('galaxies.destroy', $galaxy)}}" method="POST">
         @csrf
         @method('DELETE')
         <input type="submit" class="btn btn-danger" value="Delete">
       </form>
      </div>
    </div>
  </div>
</div>
   
</div>


@endsection