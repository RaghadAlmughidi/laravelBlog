@extends('layouts.app')
@section('content')
 <div class="container  col-md-6 col-lg-4 col-xl-3"> 
    @if (session('status'))
    <small  class=" text-danger" >  {{session('status')}}</small>
    @endif
    <form class="p-3" action="{{route('login')}}"  method="POST" class="">
      @csrf
      
      <div class="form-group" >
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control " id="email" >
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
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="remember" name="remember">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>
      
       
      
        <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
      </form>
 </div>



@endsection