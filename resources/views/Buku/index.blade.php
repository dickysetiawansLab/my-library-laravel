@extends('_template')

@section('title', 'Buku')

@section('konten')
	<div class="container-fluid">
			@if(auth()->user()->role == 'admin')
                    <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Data Buku</h1>
                    <p class="mb-4">Data table daftar buku dari d-perpus, menampilkan seluruh data buku, penerbit,dan pengarang.</p>
                    <a href="/buku/tambah" class="btn btn-dark btn-sm mb-2" style="text-decoration: none; margin-top: 5px;">+ Tambah Data</a>
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
										    <th scope="col">Judul Buku</th>
										    <th scope="col">Pengarang</th>
										    <th scope="col">Penerbit</th>
										    <th scope="col">Buku Baik</th>
										    <th scope="col">Buku Rusak</th>
										    <th scope="col">Jumlah Buku</th>
										    <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach($buku as $b => $book)
								    		<?php 
									    		$baik = $book->id_buku_baik;
									    		$rusak = $book->id_buku_rusak;
									    		$jumlah = $baik + $rusak;
								    		?>
								    		<tr>	
									    		<th scope="row">{{ $i++ }}</th>
											    <td>{{ $book->judul_buku }}</td>
											    <td>{{ $book->pengarang }}</td>
											    <td>{{ $book->penerbit_buku }}</td>
											    <td>{{ $book->id_buku_baik }}</td>
											    <td>{{ $book->id_buku_rusak }}</td>
											    <td>{{ $jumlah }}</td>
											    <td>
													<a href="/buku/edit?id={{ $book->id }}" class="btn btn-dark btn-sm" style="text-decoration: none; ">
                                           				<i class="fas fa-exclamation-triangle"></i>
													</a>
							                        <a href="" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#deleteModal" style="text-decoration: none; margin-top: 5px;">
                                           				<i class="fas fa-trash"></i>
                                           			</a>

											    </td>
											</tr>
								    	@endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            @else
                <h1 class="h3 mb-2 text-gray-800">Daftar Buku</h1>
            	<div class="row g-2 mb-4 ml-2">
                    @foreach($buku as $b => $book)

                            <div class="card shadow mr-3" style="width: 15rem; margin-top: 5px;">
                                <?php 
                                    $images = $book->image;
                                ?>
                                <div style="margin: 10px;">
                                    <img src="{{ asset('images/'.$book->image)  }}" class="card-img-top" alt="..." height="270">
                                </div>
                                
                                <div class="card-body">
                                    <h5 class="card-title" style="font-weight: bold; margin-bottom: 10px;">{{$book->judul_buku}}</h5>
                                    <p class="card-text">{{$book->pengarang}}  <br> {{$book->kategori_buku}}</p>
                                    <a href="/buku/review?id={{$book->id}}" class="btn btn-primary">Review</a>
                                 </div>
                            </div>
                       
                    @endforeach
                </div>
            @endif

            </div>
            

@endsection
@foreach($buku as $b => $book)
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
                    <a href="/buku/delete?id={{ $book->id }}" class="btn btn-primary"> Hapus </a>
                    <!-- <a class="" href="/logout">Logout</a> -->
                </div>
            </div>
        </div>
    </div>
@endforeach