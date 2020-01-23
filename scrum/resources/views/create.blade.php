@extends('layouts.app')
@section('content')
<div class="container">

<div class="container col-6">
  <div class="display-4">
    Create New Project
</div>
    <form method="POST" action="/projects" enctype="multipart/form-data">
        @csrf
        <div class="form-group" >
          <input type="text" name="name" id="project_name" class="form-control" placeholder="Project Name" aria-describedby="name-text">
          <small id="name-text" class="text-muted">Your project name</small>
          <input type="text" name="description" id="project_description" class="form-control" placeholder="Description" aria-describedby="description-text">
          <small id="description-text" class="text-muted">Your project description</small>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          @if ($errors->any())
        <div class="p-3 mb-2 bg-danger text-white">
          <div class="ul">@foreach($errors->all() as $error)
          <li>{{$error}}</li></div>
          @endforeach
        </div>
        @endif
        </div>
    </form>
</div>
@endsection        