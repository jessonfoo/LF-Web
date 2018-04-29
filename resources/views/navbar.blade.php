@extends('app')
@section('content')
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="#">
			<img src="/assets/images/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
		</a>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Pricing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
@endsection
