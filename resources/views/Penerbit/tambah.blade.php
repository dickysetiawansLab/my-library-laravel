@extends('_template')

@section('title', 'Tambah Penerbit - D Perpus')

@section('konten')

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Tambah data penerbit</h1>
  <p class="mb-2">Tambahkan data penerbit baru yang belum terdaftar</p> 
  <button class="btn btn-dark mb-4" style=" font-size: 1.2rem;" onclick="window.location.href='/data/penerbit'">Kembali <i class='bx bx-book'></i></button>
  <div class="card shadow">
            <div class="card-body">
                <form class="row g-3" action="/data/penerbit/tambah" method="post" enctype="multipart/form-data">
                  @csrf
                 <!--  <div class="col-md-12 mb-3">
                    <label for="inputkode" class="form-label">Kode Penerbit</label>
                    <input type="text" class="form-control" id="inputkode" required="" name="kode_penerbit" placeholder="Masukan Kode Penerbit" >
                  </div> -->
                  <div class="col-md-12 mb-3">
                    <label for="inputnama" class="form-label">Nama Penerbit</label>
                    <input type="text" class="form-control" id="inputnama" required="" name="nama_penerbit" placeholder="Masukan Nama Penerbit">
                  </div>
                  <div class="col-md-12 mb-3">
                      <label for="inputverif" class="form-label">Verif Penerbit</label>
                      <select id="inputState" class="custom-select" name="verif_penerbit">
                      <option selected>Belum Terverifikasi</option>
                        <option>Terverifikasi</option>
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