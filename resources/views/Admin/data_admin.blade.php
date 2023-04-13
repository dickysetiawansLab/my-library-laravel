@extends('_template')

@section('title', 'Data Admin - D Perpus')

@section('konten')

<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Data Admin</h1>
                    <p class="mb-4">Daftar admin yang telah terdaftar</p>
                    <a href="/data/admin/tambah" class="btn btn-dark btn-sm mb-2" style="text-decoration: none; margin-top: 5px;">+ Tambah Data</a>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Table Daftar admin D-PERPUS</h6>

                         </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                        @php $i = 1; @endphp
                                        @foreach($users as $user => $u)

								    		<tr>
									    		@if($u->role == 'admin')	
										    		<th scope="row">{{ $i++ }}</th>
												    <td>{{ $u->username }}</td>
												    <td>{{ $u->fullname }}</td>
												    <td>******</td>
												    <td>{{ $u->updated_at }}</td>
													<td>
								                        	<a href="/data/anggota/delete?id={{ $u->id }}" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#deleteModal">
	                                           						<i class="fas fa-trash"></i>
															</a>
												    </td>
												@endif
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
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <a href="/data/anggota/delete?id={{ $u->id }}" class="btn btn-primary"> Hapus </a>
                        <!-- <a class="" href="/logout">Logout</a> -->
                    </div>
                </div>
            </div>
        </div>