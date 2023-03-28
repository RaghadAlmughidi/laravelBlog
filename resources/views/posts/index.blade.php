@extends('layouts.app')
@section('content')
 <div class="container">
   <form method="POST" action="{{route('posts')}}" class="mb-5">
      @csrf
      Posts
      <div class="form-group">
        <label for="body">atart your post</label>
        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
        @error('body')
        <small  class=" text-danger ">{{$message}}</small>
    @enderror 
    
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
    </form>
    @if ($posts->count())
    @foreach ($posts as $post)
    <div class="mb-3 ml-3">
      <a href="{{route('users.posts',$post->user)}}">{{$post->user->name}}</a> <span>{{$post->created_at->diffForHumans()}}</span>
      <p> {{$post->body}}</p>
    </div>
  <div class="">
  @can('delete', $post)
     
  
  <form action="{{route('posts.destroy',$post)}}" method="post">
    @csrf
    @method('DELETE')
  <button type="submit" class="btn btn-danger"> delete</button>
  </form>
  @endcan
  <hr>
  </div>
  
    @endforeach
    
    {{ $posts->links('pagination::bootstrap-4')}}
    @else
        
  <p>no posts yet</p>
        
    @endif
 </div>



@endsection