@extends('_template')

@section('title', 'Data Peminjaman Buku - D Perpus')

@section('konten')
<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Data Peminjam</h1>
    <p class="mb-4">Data table daftar yang sedang meminjam.</p>
    <a href="/data-peminjam/tambah-peminjam" class="btn btn-dark btn-sm mb-2" style="text-decoration: none; margin-top: 5px;">+ Tambah Data</a>
    
		<div class="card shadow mb-4">
	      <div class="card-header py-3">
	        <h6 class="m-0 font-weight-bold text-primary">Table Daftar Buku D-PERPUS</h6>
	            </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                            <thead class="table-dark">
	                                <tr>
	                                   	<th scope="col">No</th>
										<th scope="col">Nama Anggota</th>
										<th scope="col">Judul Buku</th>
										<th scope="col">Tanggal Peminjam</th>
										<th scope="col">Tanggal pengembalian</th>
										<th scope="col">Kondisi Buku Saat Dipinjam</th>
										<th scope="col">Kondisi Buku Saat Dikembalikan</th>
										<th scope="col">Denda</th>
										<th scope="col">Action</th>
	                                 </tr>
	                            </thead>

	                            <tbody>
	                            	 @php $i = 1; @endphp
	                                 @foreach($peminjams as $p)
										<tr>
											<th scope="row">{{ $i++ }}</th>
											<td>{{ $p->nama_anggota }}</td>
											<td>{{ $p->judul_buku }}</td>
											<td>{{ $p->tanggal_peminjam }}</td>
											<td>{{ $p->tanggal_pengembalian }}</td>
											<td>{{ $p->kondisi_buku_saat_dipinjam }}</td>
											<td>{{ $p->kondisi_buku_saat_dikembalikan }}</td>
											<td>{{ $p->denda }}</td>
											<td>
													<a href="/data-peminjam/edit?id={{ $p->id }}" class="btn btn-dark btn-sm" style="text-decoration: none; ">
	                                           			<i class="fas fa-exclamation-triangle"></i>
													</a>
								                    <a href="/data-peminjam/delete?id={{ $p->id }}" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#deleteModals" style="text-decoration: none; margin-top: 5px;">
	                                           			<i class="fas fa-trash"></i>
	                                           		</a>
										</tr>
									@endforeach	

	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	
</div>
					

@endsection
 @foreach($peminjams as $p)
	<div class="modal fade" id="deleteModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	        aria-hidden="true">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
	                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	                        <span aria-hidden="true">×</span>
	                    </button>
	                </div>
	                <div class="modal-body">Pilih "Hapus" untuk menghapus data tersebut.</div>
	                <div class="modal-footer">
	                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
	                    <a href="/data-peminjam/delete?id={{ $p->id }}" class="btn btn-primary"> Hapus </a>
	                    <!-- <a class="" href="/logout">Logout</a> -->
	                </div>
	            </div>
	        </div>
	    </div>
@endforeach