<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
  	     <nav class="navbar navbar-expand-lg navbar-dark border-left" style="background-color: #B62770; color: white; margin-left: -1px;">
                    <div class="container-fluid">
                       <h3 class="title-nav" style="font-weight: bold;">
                       		D - Perpus 
                       </h3>
                       <i class='bx bxs-book' style="margin-left: 5px; font-size: 1.5rem;"></i> 
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item"><a class="nav-link" href="/"><i class='bx bxs-dashboard'></i> Dashboard </a></li>
                                <li class="nav-item"><a class="nav-link" href="#!"><i class='bx bxs-bell'></i> notifikasi</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ URL('images/user.png')}}" style="margin-right: 2px;" width="20" height="20">{{ auth()->user()->username }}</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/user/{{ auth()->user()->username }}">Profile</a>
                                        <div class="dropdown-divider"></div>
                                        	<form action="/logout" method="post">
									                         @csrf
									                           <button class="dropdown-item">
									            	              <i class='bx bx-log-out'></i>
									                             Logout</button>
									                         </form>

                                    </div>
                                </li>
                            </ul>
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
	
		
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
	
	<script src="{{ URL('js/scripts.js')}}"></script>
  </body>
</html>