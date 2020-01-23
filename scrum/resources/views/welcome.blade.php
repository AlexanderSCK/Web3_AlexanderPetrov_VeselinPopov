@extends('layouts.app')
@section('content')
{{-- 'Example' --}}
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div> --}}
        <div class="section">
            <div class="container">
            <div class="row  pb-5">
                <div class="col-6">
                    <div class="display-4">
                        The Project Management tool for ICT Students 
                    </div>
                    <div class="lead">Become the master of project management and learn the process of developing a real life projects.Collaborate your peers and teachers for the ultimate grade.</div>
                </div> 
                <div class="col-6">
                <img src="https://blog.iil.com/wp-content/uploads/2016/05/featured-secret-to-great-scrummaster.jpg" alt="..."  class="img-thumbnail" style="max-witch:200px"> 
                </div>
        </div>
                  {{-- <img class="card-img-top" src="{{asset('storage/watermarks/edit.png')}}" alt="Card image cap">
                 class="card" style="border: none;background: none;">
                    <img class="card-img-top" src="{{asset('storage/watermarks/light-bulb.png')}}" alt="Card image cap">
                  <img class="card-img-top" src="{{asset('storage/watermarks/rocket.png')}}" alt="Card image cap"> --}}
                  <div class="row row-cols row-cols-md-3 pt-4">
                    <div class="col px-md-5 ">
                      <div class="card h-100 " style="border: none;background: none;">
                        <img src="{{asset('storage/watermarks/light-bulb.png')}}" class="card-img-top" alt="...">
                        <div class="card-body ">
                          <h5 class="card-title font-weight-bold" >Create</h5>
                          <p class="card-text font-weight-light">Create your own projects with our Project Management tool</p>
                        </div>
                      </div>
                    </div>
                    <div class="col px-md-5">
                      <div class="card" style="border: none;background: none;">
                        <img src="{{asset('storage/watermarks/edit.png')}}" class="card-img-top" alt="...">
                        <div class="card-body ">
                          <h5 class="card-title font-weight-bold">Explore</h5>
                          <p class="card-text font-weight-light">Add tasks to your project and complete them</p>
                        </div>
                      </div>
                    </div>
                    <div class="col px-md-5">
                      <div class="card " style="border: none;background: none;">
                        <img src="{{asset('storage/watermarks/rocket.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title  font-weight-bold">Accomplish</h5>
                          <p class="font-weight-light">Reach higher project management skills and improve your abilities to lead projects</p>
                        </div>
                      </div>
                    </div>
                  </div>
        </div>
        </div>
@endsection