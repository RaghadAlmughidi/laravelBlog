@extends('layouts.app')
@section('content')
 <div class="container col-md-6 col-lg-4 col-xl-3">
  <form action="{{route('register')}}"  method="POST" class="p-3">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name"  class="form-control " id="name">
    @error('name')
        <small  class=" text-danger" >{{$message}}</small>
    @enderror  
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" value="{{old('username')}}" class="form-control" id="username" >
      @error('username')
      <small  class=" text-danger">{{$message}}</small>
  @enderror 
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" name="email" class="form-control" id="email" >
      @error('email')
      <small  class=" text-danger ">{{$message}}</small>
  @enderror 
    </div>
    
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        @error('password')
        <small  class=" text-danger ">{{$message}}</small>
    @enderror 
      </div>
      <div class="form-group">
        <label for="password_confirmation">Password again</label>
        <input type="password" name="password_confirmation" class="form-control  " id="password_confirmation">
     
      </div>
    
      <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
    </form>
 </div>



@endsection