@extends('layouts.app')

@section('content')
<div class="vh-100 text-center">
        <h1 class="mt-5 mb-2">{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
      <ul class="list-group">
        <div class="d-flex justify-content-center">
             @foreach ($project->technologies as $technology)
                <li class="d-inline mx-2 badge rounded-pill text-bg-dark">{{ $technology->name }}</li>
            @endforeach 
        </div>
          
        </ul>

</div>

@endsection
