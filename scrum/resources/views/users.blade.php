
@extends('layouts.app')
@section('content')
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <a href="{{url('/export')}}"><button type="button" class="btn btn-success" >Download</button></a>

    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection