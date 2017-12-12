<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
</head>
<body class="bg-warning">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="/">SRK WORLD</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/about">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/contact">Contact</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{route('sarwar')}}">Create</a>
		      </li>
		      @guest
		      <li class="nav-item">
		        <a class="nav-link" href="{{route('login')}}">Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{route('register')}}">Register</a>
		      </li>
		      @else 
		      <li class="nav-item">
		      	<a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
		      	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
		      </li>
		      @endguest
		      
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
	</nav>
	</div>

	@yield('content')
	
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>