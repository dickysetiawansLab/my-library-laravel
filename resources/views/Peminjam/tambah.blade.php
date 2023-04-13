@extends('_template')

@section('title', 'Tambah Data Peminjaman Buku - D Perpus')

@section('konten')
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Edit data peminjam</h1>
   <p class="mb-2">Edit jika data peminjam yang anda masukan salah</p>
  <button class="btn btn-dark mb-4" style=" font-size: 1.2rem;" onclick="window.location.href='/data-peminjam'">Kembali <i class='bx bx-book'></i></button>
  <div class="card shadow" style="margin-bottom: 30px;">
    <div class="card-body">
                <form class="row g-3" action="/data-peminjam/tambah-peminjam" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-12 mb-2">
                      <label for="inputNamaanggota" class="form-label">Nama Anggota</label>
                      <select id="inputNamaanggota" class="custom-select" name="nama_anggota">
                      <option selected>Masukan Nama Anggota.......</option>
                      @foreach($users as $user => $u)
                        @if($u->role == 'anggota')
                          <option>{{ $u->username }}</option>
                        @endif
                      @endforeach
                      </select>
                  </div>
                  <div class="col-md-12 mb-2">
                      <label for="inputJudulBuku" class="form-label">Judul Buku</label>
                      <select id="inputJudulBuku" class="custom-select" name="judul_buku">
                      <option selected>Masukan Judul Buku......</option>
                      @foreach($buku as $b)
                          <option>{{ $b->judul_buku }}</option>
                      @endforeach
                      </select>
                  </div>

                  <div class="col-md-6">
                    <label for="inputTanggal" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" id="inputTanggal" required="" name="tanggal_peminjam">
                  </div>
                  <div class="col-md-6">
                    <label for="inputTanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="inputTanggal_pengembalian" required="" name="tanggal_pengembalian">
                  </div>
                  <div class="col-md-12 mb-2">
                      <label for="inputKondisiBuku" class="form-label">Kodisi Buku Saat Ini</label>
                      <select id="inputKondisiBuku" class="custom-select" name="kondisi_buku_saat_dipinjam">
                      <option selected>Masukan Kodisi Buku Saat Ini......</option>
                          <option>Baik</option>
                          <option>Sobek</option>
                          <option>Halaman Ada yg ilang</option>
                      </select>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
  
</div>
	
@endsection