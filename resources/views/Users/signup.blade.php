@extends('_layout')

@section('title', 'Sign up')
 
@section('konten')
	<div class="" style="width: 600px; margin-left: 250px; padding-top: 100px;">
		<h1 class="mb-3" style="color: #B62752;">Sign up</h1>
		<form action="/signup" method="post">
			@csrf
			<div class="form-floating mb-3">
			  <input type="text"name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="xample" value="{{ old('username')}}">
			  <!-- @error('username')
			    	<div class="invalid-feedback">
			    		{{ $message }}
			    	</div>
			    @enderror -->
			  <label for="floatingInput">Username</label>
			</div>
			<div class="form-floating mb-3">
			  <input type="email"name="email" class="form-control  @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
			  @error('email')
			    	<div class="invalid-feedback">
			    		{{ $message }}
			    	</div>
			    @enderror
			  <label for="floatingInput">Email address</label>
			</div>
			<div class="form-floating mb-3">
			  <input type="password"name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" >
			 <!--  @error('password')
			    	<div class="invalid-feedback">
			    		{{ $message }}
			    	</div>
			    @enderror -->
			  <label for="floatingPassword">Password</label>
			</div>
			<div class="form-floating mb-3">
				<button type="submit" class="btn" style="background-color: #B62752; color: white;">Sign up</button>
			</div>
			<p>You have account? <a href="/login">Login</a></p>
		</form>
	</div>
@endsection