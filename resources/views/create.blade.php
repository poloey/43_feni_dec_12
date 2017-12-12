@extends('master')
@section('title', 'Create page')
@section('content')
<div class="container mt-5">
	<div>
		<h2>Create Page</h2><hr>
	</div>

	<div class="card">
		<div class="card-header"></div>
		<div class="card-body">
			<form action="/create" method="post">
					{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" id="title" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info">Create a Post</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection