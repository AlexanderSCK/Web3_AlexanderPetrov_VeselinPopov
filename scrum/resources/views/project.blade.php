
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="pb-3"> 
                <a href="{{ route('projects.create') }}" ><button type="button" class="btn btn-success " >{{ __('New') }}</button></a>
        </div>
        <div class="h1">Projects</div>
        <div>
                <div class="row row-cols-1 row-cols-md-3">
                @foreach ($projects as $project)
                <div class="col mb-4">
                  <div class="card h-100 ">
                        <a class="nav-link depres" href="/projects/{{$project->project_id}}">
                                <p class="card-title h2">{{$project->name}}</p>
                        </a>
                        <div class="card-body">
                        @if ($project->image)
                              <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="Project Image" >
                        @elseif(!$project->image)
                                <img src="{{asset('storage/watermarks/folder.png')}}" class="card-img-top" alt="Project Image" >
                        @endif
                        </div>                        

                        
                        <div class="card-footer text-muted">
                                Last update : {{$project->updated_at}}
                              </div>
                  </div>
                  
                </div>
                 @endforeach
              </div>
        
                         {{-- <a class="nav-link" href="/projects/{{$project->project_id}}">{{ $project->name}}</a> --}}
        
        </div>
</div>
@endsection