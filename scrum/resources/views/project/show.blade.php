@extends('layouts.app')
@section('content')

<div class="container paper-container">
    <div class="h1 paper-header">{{$project->name}}</div><hr/>

    <div class="row ">
        <div class="col-3">
                
                <ul class="list-group">
                    <li class="list-group-item active">Details</li>
                    <li class="list-group-item">@if ($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="Watermark" class="img-thumbnail">
                         @elseif(!$project->image)
                        <img src="{{asset('storage/watermarks/folder.png')}}" class="card-img-top" alt="...">
                         @endif
                    </li>
                    <li class="list-group-item">Last Update at :{{$project->updated_at}}</li>
                    <li class="list-group-item">Description  : {{$project->description}}</li>
                    <li class="list-group-item">Created At : {{$project->created_at}}</li>
                    <li class="list-group-item">Deadline : {{$project->deadline}}</li>
                    <li class="list-group-item">Total Tasks : {{$tasks->count()}}</li>
                    <li class="list-group-item "><a href="/projects/{{$project->project_id}}/edit"> <i class="material-icons  md-dark">edit</i>Edit Project</a></li>

                  </ul>
        </div>
        <div class="col-5">
            <h2>Task List</h2>
            @if ($project->tasks->count())
            <div>
                @foreach ($project->tasks as $task)
                <ul class="list-group list-group-flush ">
                <li class="list-group-item {{$task->completed ? 'is-completed-task ' : ''}}">
                    <form method="POST" action="/projectTask/{{$task->task_id}}">
                    @method('PATCH')
                    @csrf
                        <label class="checkbox {{$task->completed ? 'is-complete' : ''}} " for="completed">
                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked' : ''}}/>
                            <p class="h4">{{$task->description}}</p>
                            </label>
                    </form></li>
                </ul>
                
                @endforeach
            </div>
            @endif
        </div>
        <div class="col-4">
            <form method="POST" action="/projects/{{$project->project_id}}/tasks" class="box">
                @csrf
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Add Task</button>                    </div>
                        <input type="text" class="form-control  {{$errors->has('description') ? 'border-danger' : ''}}" name="description" value=""/>
                    </div>
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
            
             </form>
        </div>
    </div>
</div>
@endsection