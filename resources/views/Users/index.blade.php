@extends('_template')

@section('title', 'Profile - D Perpus')
@section('konten')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800" style="font-weight: bold;">Profile</h1>
	<div class="row">
		
                        <div class="col-lg-5 border-top-primary">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-body"style="margin: 25px;">
                                	<h4 class="mb-4" style="font-weight: bold;">Edit Profile</h4>
                                    <form class="row g-3" action="/user/{{ auth()->user()->username }}" method="post" enctype="multipart/form-data" >
					               	  @csrf
					                  <div class="col-md-12 mb-3">
					                    <label for="inputUsername" class="form-label">Nama Pengguna</label>
					                    <input type="text" class="form-control" id="inputUsername" required="" name="username"
					                    placeholder="Masukan Nama Pengguna" value="{{ auth()->user()->username }}" style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:2px;">
					                  </div>
					                  <div class="col-12 mb-3">
					                    <label for="inputKode User" class="form-label">Kode Anggota</label>
					                    <input type="text" class="form-control" id="inputKode User" required="" name="kode_user" placeholder="Masukan Kode User"value="{{ auth()->user()->kode_user }}" style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:2px;">
					                  </div>
					                 
					                  <div class="col-12 mb-3">
					                    <label for="inputISBN" class="form-label">NIS</label>
					                    <input type="text" class="form-control" id="inputnis" required="" name="nis" placeholder="Masukan nis"value="{{ auth()->user()->nis }}" style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:2px;">
					                  </div> 
					                  <div class="col-12 mb-3">
					                    <label for="inputNama_lengkap" class="form-label">Nama Lengkap</label>
					                    <input type="text" class="form-control" id="inputNama_lengkap" required="" name="fullname" placeholder="Masukan Nama Lengkap" value="{{ auth()->user()->fullname }}"style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:2px;"> 
					                  </div>
					                  <div class="col-12 mb-3">
					                    <label for="inputKelas" class="form-label">Kelas</label>
					                    <input type="text" class="form-control" id="inputKelas" required="" name="kelas" placeholder="Masukan Kelas" value="{{ auth()->user()->kelas }}" style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:2px;">
					                  </div>
					                  <div class="col-12 mb-3">
					                    <label for="inputAlamat" class="form-label">Alamat</label>
					                    <input type="text" class="form-control" id="inputAlamat" required=""value="{{ auth()->user()->alamat }}" name="alamat" placeholder="Masukan Alamat" style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:2px;">
					                  </div>
					                  <div class="col-12 mb-3 mt-3">
					                    <button type="submit" class="btn btn-primary" name="submit" style="width: 100%;">Update</button>
					                  </div>
					                </form>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-7">

                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4 border-left-primary">
                                <div class="card-body">
                                	<div class="row">
                                		<div class="col-sm-4">
                                			<img src="{{ URL('images/user.png')}}" style="display: block;margin: auto;margin-top: 10px;" width="150" height="150">

                                		</div>
                                		<div class="col-sm-7">
                                			<p>
                                				<span style="font-size: 1.1rem; font-weight: bold;">{{ auth()->user()->fullname }}</span><br>
                                				{{ auth()->user()->kode_user }}
                                			</p>
                                			<p>
                                				{{ auth()->user()->nis }}<br>
                                				{{ auth()->user()->username }}<br>
                                				{{ auth()->user()->kelas }}<br>
                                				{{ auth()->user()->alamat }}
                                			</p>
							    			<p></p>
							    			<p></p>
							    			<p></p>
							    			<p></p>
							    			<p></p>
                                		</div>
                                	</div>
                                </div>
                            </div>
                            <div class="card shadow mb-4 ">
                            	<div class="card-body">
                            		<div class="row">
                            			<div class="col-6">
                            				<a href="" class="btn btn-primary" style="width: 100%;">Bookmark</a>
                            			</div>
                            			<div class="col-6">
                            				<a href="" class="btn btn-primary"style="width: 100%;">History Buku</a>
                            			</div>
                            		</div>
                            	</div>
                            </div>
                             <div class="card shadow mb-4">
                            	<div class="card-body" style="margin: 10px;">
                            		<h4 class="mb-4">Ganti Password</h4>
                            		<form class="row">
                            			<div class="col-12 mb-4">
						                    <label for="inputPengarang" class="form-label">Masukan Password Baru</label>
						                	<input type="password" class="form-control" id="inputPengarang" required=""  placeholder="********">
						                </div>
                            			<div class="col-12 mb-2">
						                    <button type="submit" class="btn btn-primary" style="width: 100%;">Ganti</button>
						                </div>
                            		</form>
                            	</div>
                            </div>

						</div>
</div>
	<!-- <div class="row g-3" style="width: 95%; margin: 20px;">
		<div class="card col-md-8" style="border:none;">
				<h3 style="font-weight: bold;">Profil Saya</h3>
	            <div class="card-body">
	            	<h4>Edit Profil Saya</h4>
	                <form class="row g-3" action="/user/{{ auth()->user()->username }}" method="post" enctype="multipart/form-data">
	               	  @csrf
	                  <div class="col-md-12">
	                    <label for="inputUsername" class="form-label">Nama Pengguna</label>
	                    <input type="text" class="form-control" id="inputUsername" required="" name="username"
	                    placeholder="Masukan Nama Pengguna" value="{{ auth()->user()->username }}" style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:5px;">
	                  </div>
	                  <div class="col-12">
	                    <label for="inputKode User" class="form-label">Kode Anggota</label>
	                    <input type="text" class="form-control" id="inputKode User" required="" name="kode_user" placeholder="Masukan Kode User"value="{{ auth()->user()->kode_user }}" style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:5px;">
	                  </div>
	                 
	                  <div class="col-12">
	                    <label for="inputISBN" class="form-label">NIS</label>
	                    <input type="text" class="form-control" id="inputnis" required="" name="nis" placeholder="Masukan nis"value="{{ auth()->user()->nis }}" style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:5px;">
	                  </div> 
	                  <div class="col-12">
	                    <label for="inputNama_lengkap" class="form-label">Nama Lengkap</label>
	                    <input type="text" class="form-control" id="inputNama_lengkap" required="" name="fullname" placeholder="Masukan Nama Lengkap" value="{{ auth()->user()->fullname }}"style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:5px;"> 
	                  </div>
	                  <div class="col-12">
	                    <label for="inputKelas" class="form-label">Kelas</label>
	                    <input type="text" class="form-control" id="inputKelas" required="" name="kelas" placeholder="Masukan Kelas" value="{{ auth()->user()->kelas }}" style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:5px;">
	                  </div>
	                  <div class="col-12">
	                    <label for="inputAlamat" class="form-label">Alamat</label>
	                    <input type="text" class="form-control" id="inputAlamat" required=""value="{{ auth()->user()->alamat }}" name="alamat" placeholder="Masukan Alamat" style="border-top: none; border-right: none;border-left: none; border-radius: 1px;margin-top:5px;">
	                  </div>
	                  <div class="col-12">
	                    <button type="submit" class="btn btn-primary" name="submit" style="width: 100%;">Update</button>
	                  </div>
	                </form>
	            </div>
	          </div>
			<div class="col-md-4">
	    		<div style="margin-left: 50px; margin-top: 80px;">
	    			<h5>Profil Saya</h5>
	    			<img src="{{ URL('images/user.png')}}" style="display: block;margin: auto; margin-bottom: 20px; margin-top: 20px;" width="100" height="100">
	    			<p>Kode Anggota : {{ auth()->user()->kode_user }}</p>
	    			<p>NIS : {{ auth()->user()->nis }}</p>
	    			<p>Nama Lengkap : {{ auth()->user()->fullname }}</p>
	    			<p>Nama Pengguna : {{ auth()->user()->username }}</p>
	    			<p>Kelas : {{ auth()->user()->kelas }}</p>
	    			<p>Alamat : {{ auth()->user()->alamat }}</p>
	    		</div>
	   		 </div>
			
	</div> -->
@endsection