@extends('layouts.app')

@section('content')   
<div class="container">
        <div class="container col-6">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <div class="display-3">Edit Project</div>
                        </div>
                        <div class="col-1">
                            <form  method="POST" action="/projects/{{$project->project_id}}">
                                {{method_field('DELETE')}}
                                @csrf
                                <div class="">
                                        <button type="submit" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           <form  method="POST" action="/projects/{{$project->project_id}}" enctype="multipart/form-data">
                {{method_field('PATCH')}}
                @csrf
                <div class="form-group">
                    <label class="label" for="name">Name</label>
     
                    <div class="control">
                    <input type="text" class="form-control {{$errors->has('name') ? 'border-danger' : ''}} " name="name" placeholder="Name" value="{{$project->name}}">
                    </div>
                </div>
     
                <div class="field">
                <label class="label" for="title">Description</label>
               
                <div class="form-group">
                <textarea name="description" class="form-control {{$errors->has('description') ? 'border-danger' : ''}}">{{$project->description}} </textarea>
                </div>

                <div class="form-group">
                        <label class="label" for="deadline">Deadline</label>
         
                        <div class="control">
                        <input type="text" class="form-control {{$errors->has('deadline') ? 'border-danger' : ''}}" name="deadline" placeholder="yyyy-mm-dd" value="{{$project->deadline}}">
                        </div>
                    </div>
                </div>
                <div class="form-group d-flex flex-column">
                  <label for="image">Project Image</label>
                  <input type="file" name="image" class="py-2" value="{{$project->image}}" >
                </div>
                        <div class="">
                                <button type="submit" class="btn btn-primary">Update Project</button>
                        </div>
            </form>
            @if ($errors->any())
            <div class=" m-2 notification bg-danger text-white">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>

@endsection
