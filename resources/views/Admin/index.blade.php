@extends('_nav')

@section('title', 'Data - D Perpus')
<style type="text/css">
	.title-nav{
		margin-left: 16px;
	}
	.nav-item{
		margin-left: -10px;
	}
</style>

@section('header')
	<h2 style="margin: 20px; margin-left: 70px; font-weight: bold;">Data</h2>
<div style="margin: 30px; margin-left: 70px; width:89%;">
	<div class="anggota mb-5" style="border-bottom: 1px; border-bottom-color: #000">
		<div class="row g-3" style="margin-bottom: 20px;">
			<div class="col-md-9"style="margin-top: 30px;">
				@if(auth()->user()->role == 'admin')
					<h4 >Data Anggota</h4>
				@endif
			</div>
			<div class="col-md-3" style="margin-top: 20px;">
				@if(auth()->user()->role == 'admin')
					<button class="btn btn-dark" style=" font-size: 1.2rem; width: 100%;" onclick="window.location.href='/data/anggota/tambah'"><i class='bx bx-plus'></i> Tambah Anggota</button>
				@endif
			</div>
		</div>
		
		@if(auth()->user()->role == 'admin')

			<table class="table col-md-12" style="">
				  <thead class="table-dark">
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Kode Anggota</th>
				      <th scope="col">NIS</th>
				      <th scope="col">Nama Lengkap</th>
				      <th scope="col">Kelas</th>
				      <th scope="col">Alamat</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($users as $user => $u)
				  		<tr>	
				  			@if($u->role == 'anggota')
						    		<th scope="row">1</th>
								    <td>{{ $u->kode_user }}</td>
								    <td>{{ $u->nis }}</td>
								    <td>{{ $u->fullname }}</td>
								    <td>{{ $u->kelas }}</td>
								    <td>{{ $u->alamat }}</td>
								    <td>
								    	
									    <a href="" class="badge text-bg-success"style="text-decoration: none;" >Edit</a>
				                        <a href="" class="badge text-bg-danger" style="text-decoration: none;">Delete</a>
								    		
								    </td>
								</tr>
							@endif
				  	@endforeach
				  </tbody>
			</table>
		@endif

	</div>
	

	<!--
		Data Admin
	-->
	<div class="admin mb-5">
		<div class="row g-3" style="margin-bottom: 20px;">
			<div class="col-md-9"style="margin-top: 30px;">
				@if(auth()->user()->role == 'admin')
					<h4 >Data Administrator</h4>
				@endif
			</div>
			<div class="col-md-3" style="margin-top: 20px;">
				@if(auth()->user()->role == 'admin')
					<button class="btn btn-dark" style=" font-size: 1.2rem; width: 100%;" onclick="window.location.href='/admin/anggota-admin'"><i class='bx bx-plus'></i> Tambah admin</button>
				@endif
			</div>
		</div>
		<table class="table col-md-12" style="">
			  <thead class="table-dark">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Nama Pengguna</th>
			      <th scope="col">Nama Lengkap</th>
			      <th scope="col">Kata Sandi</th>
			      <th scope="col">Terakhir login</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($users as $user => $u)
			  		<tr>
			  			@if($u->role == 'admin')
			  				<th scope="row">1</th>
							    <td>{{ $u->username }}</td>
							    <td>{{ $u->fullname }}</td>
							    <td>******</td>
							    <td>{{ $u->terakhir_login }}</td>
							    <td>
							    		
								    	<a href="" class="badge text-bg-success"style="text-decoration: none;" >Edit</a>
			                        	<a href="" class="badge text-bg-danger" style="text-decoration: none;">Delete</a>
							    		
							    </td>
			  			@endif
			  		</tr>
			  	@endforeach
			  </tbody>
		</table>
	</div>
	

	<!--
		Data Penerbit
	-->	
	<div class="penerbit mb-5">
		<div class="row g-3" style="margin-bottom: 20px;">
		<div class="col-md-9"style="margin-top: 30px;">
				@if(auth()->user()->role == 'admin')
					<h4 >Daftar Penerbit</h4>
				@endif
		</div>
		<div class="col-md-3" style="margin-top: 20px;">
				@if(auth()->user()->role == 'admin')
				<button class="btn btn-dark" style=" font-size: 1.2rem; width: 100%;" onclick="window.location.href='/data/penerbit/tambah'"><i class='bx bx-plus'></i> Tambah Penerbit</button>
				@endif
		</div>
	</div>
	<table class="table col-md-12" style="">
			  <thead class="table-dark">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Kode Penerbit</th>
			      <th scope="col">Nama Penerbit</th>
			      <th scope="col">Verif Penerbit</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($penerbits as $penerbit => $p)
			  		<tr>
			  			<th scope="row">1</th>
							<td>{{ $p->kode_penerbit }}</td>
							<td>{{ $p->nama_penerbit }}</td>
							<td> 
								<button class="btn btn-primary">{{ $p->verif_penerbit }}</button>
							</td>
							<td>
							    
								<a href="/data/penerbit/edit?id={{ $p->id }}" class="badge text-bg-success"style="text-decoration: none;" >Edit</a>

								<a href="/data/penerbit/delete?id={{ $p->id }}" class="badge text-bg-danger"style="text-decoration: none;" >delete</a>
							</td>
						</th>
			  		</tr>
			  	@endforeach
			  </tbody>
		</table>
	</div>
	

	<!--
		Data Kategori
	-->
	<div class="Kategori">
		<div class="penerbit mb-5">
			<div class="row g-3" style="margin-bottom: 20px;">
			<div class="col-md-9"style="margin-top: 30px;">
					@if(auth()->user()->role == 'admin')
						<h4 >Daftar Kategori</h4>
					@endif
			</div>
			<div class="col-md-3" style="margin-top: 20px;">
					@if(auth()->user()->role == 'admin')
					<button class="btn btn-dark" style=" font-size: 1.2rem; width: 100%;" onclick="window.location.href='/data/kategori/tambah'"><i class='bx bx-plus'></i> Tambah Kategori</button>
					@endif
			</div>
		</div>
		<table class="table col-md-12" style="">
		<thead class="table-dark">
			<tr>
			   	<th scope="col">No</th>
			    <th scope="col">Nama Kategori</th>
			    <th scope="col">Action</th>
			</tr>
			</thead>
			<tbody>
			  	@foreach($kategoris as $kategori => $k)
			  		<tr>
			  			<th scope="row">1</th>
						<td>{{ $k->nama_kategori }}</td>
						<td>
							    		
							<a href="/data/kategori/edit?id={{ $k->id }}" class="badge text-bg-success"style="text-decoration: none;" >Edit</a>
			                <a href="/data/kategori/delete?id={{ $k->id }}" class="badge text-bg-danger" style="text-decoration: none;">Delete</a>
							    		
						</td>
			  		</tr>
			  	@endforeach
		</tbody>
	</table>
	</div>
		
</div>
@endsection
@section('konten')

@endsection
