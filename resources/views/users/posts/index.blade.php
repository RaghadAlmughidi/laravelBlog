@extends('layouts.app')
@section('content')
 <div class="container">
{{$user->name}}
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