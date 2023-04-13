@extends('_template')

@section('title', 'Edit Peminjaman Buku - D Perpus')

@section('konten')
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Edit data yang sedang meminjam buku</h1>
   <p class="mb-2">Edit jika data buku yang anda masukan salah</p>
  <button class="btn btn-dark mb-4" style=" font-size: 1.2rem;" onclick="window.location.href='/data-peminjam'">Kembali <i class='bx bx-book'></i></button>
  <div class="card shadow" style="margin-bottom: 30px;">
    <div class="card-body">
                <form class="row g-3" action="/data-peminjam/edit?id={{ $peminjams->id }}" method="post">
                  @csrf
                  <div class="col-md-12 mb-2">
                     <label for="inputNamaanggota" class="form-label">Nama Anggota</label>
                     <fieldset disabled>
                     	<input type="text"class="form-control" id="" placeholder="{{ $peminjams->nama_anggota }}">
                     </fieldset>
                      	
                  </div>
                  <div class="col-md-12 mb-2">
                      <label for="inputJudulBuku" class="form-label">Judul Buku</label>
                      <fieldset disabled>
                     	<input type="text"class="form-control" id="" placeholder="{{ $peminjams->judul_buku }}">
                     </fieldset>
                  </div>

                  <div class="col-md-6">
                    <label for="inputTanggal" class="form-label">Tanggal Peminjaman</label>
                   	<fieldset disabled>
                     	<input type="text"class="form-control" id="" placeholder="{{ $peminjams->tanggal_peminjam }}">
                    </fieldset>
                  </div>
                  <div class="col-md-6">
                    <label for="inputTanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                   	<fieldset disabled>
                     	<input type="text"class="form-control" id="" placeholder="{{ $peminjams->tanggal_pengembalian }}">
                    </fieldset>
                  </div>
                  <div class="col-md-12 mb-2">
                      <label for="inputKondisiBuku" class="form-label">Kodisi Buku Saat dipinjam</label>
                      <fieldset disabled>
                     	<input type="text"class="form-control" id="" placeholder="{{ $peminjams->kondisi_buku_saat_dipinjam }}">
                    </fieldset>
                  </div>
                  @if($peminjams->kondisi_buku_saat_dikembalikan == 'sedang meminjam')
                    <div class="col-12 mb-2">
                        <label for="inputpenerbit" class="form-label">Kondisi Buku saat di kembalikan</label>
                        <select class="custom-select" id="inputpenerbit" name="kondisi_buku_saat_dikembalikan">
                          <option selected>Baik</option>
                          <option>Sobek</option> 
                          <option>Telat pegembalian</option> 
                        </select>
                    </div> 
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  @else
                    <div class="col-md-12 mb-2">
                      <label for="inputKondisiBuku" class="form-label">Kodisi Buku Saat dipinjam</label>
                      <fieldset disabled>
                      <input type="text"class="form-control" id="" placeholder="{{ $peminjams->kondisi_buku_saat_dikembalikan }}">
                      </fieldset>
                    </div>
                  @endif
                 
                </form>
            </div>
          </div>
        </div>
  
</div>
	
@endsection


