@extends('master')
@section('title', 'index page')
@section('content')
<div class="container mt-5">
	<div class="bg-primary text-light p-5">
		<h2>Author page</h2><hr>
    <h2>All post Written by {{$user_name}}</h2>
	</div>

  @foreach($posts as $post)
  	<div class="card mt-5">
  		<div class="card-header">
      <h2>{{$post->title}}</h2>  

      </div>
  		<div class="card-body">
        <p>
          Written by {{$post->user->name}} on {{$post->created_at->diffForHumans()}}
        </p>
      <p>
        {{$post->content}}
      </p>  
      </div>
  	</div>
  @endforeach
</div>
@endsection