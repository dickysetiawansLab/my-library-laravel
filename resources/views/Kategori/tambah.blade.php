@extends('_template')
@section('title', 'Tambah Kategori - D Perpus')

@section('konten')
<div class="container-fluid"> 
  <h1 class="h3 mb-2 text-gray-800">Tambah Kategori</h1>
  <p class="mb-2">Tambahkan Kategori yang belum terdaftar</p>
  <button class="btn btn-dark mb-4" style=" font-size: 1.2rem;" onclick="window.location.href='/data/kategori'">Kembali <i class='bx bx-book'></i></button>
  <div class="card shadow">
            <div class="card-body">
                <form class="row g-3" action="/data/kategori/tambah" method="post" enctype="multipart/form-data">
                  @csrf
                <!--   <div class="col-md-12 mb-2">
                    <label for="inputkode" class="form-label">Kode Kategori</label>
                    <input type="text" class="form-control" id="inputkode" required="" name="kode_kategori" placeholder="Masukan Kode Kategori">
                  </div> -->
                  <div class="col-md-12 mb-2">
                    <label for="inputnama" class="form-label">Nama kategori</label>
                    <input type="text" class="form-control" id="inputnama" required="" name="nama_kategori" placeholder="Masukan Nama kategori">
                  </div>
                  <div class="col-12 mb-2">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
</div>
	
	
@endsection