@extends('layouts.app')
@section('content')

<div class="container paper-container">

<div class="row">
    <div class="col-10">
        
        
    </div>
    <div class="col-2"><a href="{{ url('./showdata') }}" class=" mr-auto" ><button type="button" class="btn btn-success " >{{ __('Show users') }}</button></a></div>
</div>
<div class="container">
    <div class="row">
      <div class="col-sm-3">
        <p  class="font-weight-bold display-4">{{$user->name}}</p>
            @if($user->image)
                <img src="{{ asset('storage/' . $user->image) }}" alt="Watermark" class="img-thumbnail">
            @elseif(!$user->image)
                <img src="{{ asset('storage/watermarks/user.png' . $user->image) }}" alt="Watermark">
            @endif
            <form  method="POST" action="/profile/{{$user->name}}" enctype="multipart/form-data">
                {{method_field('PATCH')}}
                @csrf
                <div class="form-group d-flex flex-column">
                <input type="file" name="image" class="py-2" value="{{$user->image}} " >
                </div>
                        <div class="">
                                <button type="submit" class="btn btn-primary">Update Image</button>    
                        </div>
            </form>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$user->name}}</li>
                <li class="list-group-item">{{$user->email}}</li>
                
              </ul>
      </div>
      
      <div class="col-sm-4">
        <ul class="list-group list-group-flush">
            <p class="h2">Number of Projects</label> </p>
            <li class="list-group-item">{{ $user->projects->count() }}</li>
            <p class="h2">Total Tasks</label> </p>
            <li class="list-group-item">{{ $user->tasks->count() }}</li>
          </ul>
      </div>
      <div class="col-sm-5">           
           <h2>Statistics</h2>
          <div id="chart"></div>
      </div>
    </div>
    </div>
</div>
@endsection