<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,900;1,700&display=swap'); 
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg shadow-sm p-3 bg-body rounded">
      <div class="container">
        <a class="navbar-brand" href="/" style="font-weight: bold;letter-spacing: 0.05em;color: #B62752;">ChatMee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a href="/" class="nav-link  {{ Request::is('/') ? 'active':'' }} " aria-current="page">Home</a>
          @auth
            <a href="/user/newarticle"class="nav-link  {{ Request::is('user/newarticle') ? 'active':'' }} "><i class='bx bxs-edit'></i> New Article</a>
            <a href="/user/setting"class="nav-link  {{ Request::is('user/setting') ? 'active':'' }} "><i class='bx bxs-brightness' ></i> Setting</a>
            <li class="nav-item dropdown">
                <a href="/user" class="nav-link dropdown-toggle {{ Request::is('user') ? 'active':'' }}"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->username }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: 7px;">
                  <li><a class="dropdown-item" href="/user"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button class="dropdown-item">
                        <i class='bx bx-log-out'></i>
                         Logout</button>
                    </form>
                  </li>
            
                </ul>
              </li>
          @else
            <a href="/signin" class="nav-link {{ Request::is('signin') ? 'active':'' }} " >Sign in</a>
            <a href="/signup" class="nav-link {{ Request::is('signup') ? 'active':'' }}" >Sign up</a>
          @endauth
          </div>
        </div>
      </div>
    </nav> 
    <div>
      @yield('header')
    </div>
    <div class="container">
      @yield('konten')
    </div>
    <div>
      @yield('mykonten')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" integrity="sha512-ifx27fvbS52NmHNCt7sffYPtKIvIzYo38dILIVHQ9am5XGDQ2QjSXGfUZ54Bs3AXdVi7HaItdhAtdhKz8fOFrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>