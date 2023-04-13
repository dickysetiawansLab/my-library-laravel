@extends('_template')

@section('title', 'Perpustakaan - D Perpus')
@section('Subtitle', 'Dashboard')

@section('header')
<!-- <div class="d-flex" id="wrapper">

            <div class="border-end bg-dark" id="sidebar-wrapper" >
                <div class="sidebar-heading " style="background-color: #B62770; font-size: 1.2rem; font-weight: bold; color: white;">D - Perpus</div>
                <div class="list-group list-group-flush" >
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark" href="#!" style="color: white;"><img src="{{ URL('images/user.png')}}" style="margin-right: 5px;" width="25" height="25"> {{ auth()->user()->username }}</a>
                    <div class="list-group-item list-group-item-action list-group-item bg-dark" style="margin-left: -10px; "><h6 style="color: #B62770;">Tentang</h6></div>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark " href="#!"style="color: white;"><i class='bx bxs-dashboard'></i> Dashboard</a>
                    @if(auth()->user()->role == 'admin')
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark" href="/data"style="color: white;"><i class='bx bxs-file' ></i> Master Data</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark" href="/buku" style="color: white;"><i class='bx bxs-book'></i> Katalog Buku</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark" href="#!" style="color: white;"><i class='bx bxs-book'></i> Laporan Perpustakaan</a>
                    @else
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark" href="/buku"style="color: white;"><i class='bx bxs-book'></i> Peminjaman Buku</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark" href="#!" style="color: white;"><i class='bx bxs-book'></i> Pengembalian Buku</a>
                    @endif
                    <div class="list-group-item list-group-item-action list-group-item bg-dark" style="margin-left: -10px;"><h6 style="color: #B62770; margin-top: 5px;">Lampiran</h6></div>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark" href="#!" style="color: white;"><i class='bx bx-user'></i> Identitas Aplikasi</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark" href="#!" style="color: white;"><i class='bx bxs-message'></i> Pesan</a>
					<div class="list-group-item list-group-item-action list-group-item bg-dark" style="margin-left: -10px;"><h6 style="color: #B62770; margin-top: 5px;">Account</h6></div>
					<form action="/logout" method="post" >
						@csrf
						<button class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark" style="color: white;">
							<i class='bx bx-log-out'></i> Logout
						</button>
					</form>
                </div>
            </div>

            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-dark border-left" style="background-color: #B62770; color: white;">
                    <div class="container-fluid">
                        <button style="color: white; background: transparent; border: none; font-size: 1.2rem;" id="sidebarToggle"><i class='bx bx-menu'></i></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item"><a class="nav-link" href="#!"><i class='bx bxs-message'></i> </a></li>
                                <li class="nav-item"><a class="nav-link" href="#!"><i class='bx bxs-bell'></i> </a></li>
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

                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
                    <p>
                        Make sure to keep all page content within the
                        <code>#page-content-wrapper</code>
                        . The top navbar is optional, and just for demonstration. Just create an element with the
                        <code>#sidebarToggle</code>
                        ID which will toggle the menu when clicked.
                    </p>
                </div>
            </div>
        </div> -->
                @if(auth()->user()->role == 'admin')
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Anggota</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user_count }}</div>
                                        </div>
                                        <div class="col-auto">
<!--                                             <i class="fas fa-calendar  text-gray-300"></i> -->
                                            <i class="fas fa-user fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Buku</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{{$buku_count}}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-list fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang Meminjam
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $meminjam }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Dikembalikan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dikembalikan }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                <div>
                    <button class="btn btn-primary">
                         Komik
                    </button>
                </div>
                @endif
@endsection