@extends('master')
@section('title', 'index page')
@section('content')
<div class="container mt-5">
	<div>
		<h2>Home Page</h2><hr>
	</div>

  @foreach($posts as $post)
  	<div class="card mt-5">
  		<div class="card-header">
      <h2>{{$post->title}}</h2>  

      </div>
  		<div class="card-body">
        <p>
          Written by <a href="/posts/{{$post->user->id}}">{{$post->user->name}}</a>  on {{$post->created_at->diffForHumans()}}
        </p>
      <p>
        {{$post->content}}
      </p>  
      </div>
  	</div>
  @endforeach
</div>
@endsection