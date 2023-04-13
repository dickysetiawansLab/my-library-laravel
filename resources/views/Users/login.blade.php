@extends('_layout')

@section('title', 'Sign in')

@section('konten')
<div class="" style="width: 600px; margin-left: 250px; padding-top: 100px;">
        <h1 class="mb-3" style="color: #B62752;">Sign in</h1>
            @if(session()->has('ErorLogin'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <strong>{{session('ErorLogin')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <form action="/login" method="post">
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
              <input type="password"name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" >
             <!--  @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror -->
              <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <button type="submit" class="btn" style="background-color: #B62752; color: white;">Sign in</button>
            </div>
            <p>Don't have an account? <a href="/signup">register</a></p>
        </form>
    </div>
@endsection