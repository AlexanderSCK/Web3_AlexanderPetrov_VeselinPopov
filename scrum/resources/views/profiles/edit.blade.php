@extends('layouts.app')
@section('content')
<form  method="POST" action="/profile/{{$user->id}}" enctype="multipart/form-data">
    {{method_field('PATCH')}}
    @csrf
    <div class="form-group d-flex flex-column">
      <label for="image">Profile Picture</label>
      <input type="file" name="image" class="py-2" value="{{$user->image}}" >
    </div>
            <div class="">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
            </div>
</form>
@endsection