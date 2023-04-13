@extends('_template')

@section('title', 'Edit Kategori - D Perpus')


@section('konten')
<div class="container-fluid"> 
  <h1 class="h3 mb-2 text-gray-800">Edit data</h1>
  <p class="mb-2">Edit jika data yang kalian masukan salah</p>
  <button class="btn btn-dark mb-4" style=" font-size: 1.2rem;" onclick="window.location.href='/data/kategori'">Kembali <i class='bx bx-book'></i></button>
  <div class="card shadow">
            <div class="card-body">
                <form class="row g-3" action="/data/kategori/edit?id={{ $kategoris->id }}" method="post" enctype="multipart/form-data">
                  @csrf  
                  <div class="col-md-12 mb-2">
                    <label for="inputkode" class="form-label">Kode Kategori</label>
                    <input type="text" class="form-control" id="inputkode" required="" name="kode_kategori" placeholder="Masukan Kode Kategori" value="{{$kategoris->kode_kategori}}">
                  </div>
                  <div class="col-md-12 mb-2">
                    <label for="inputnama" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="inputnama" required="" name="nama_kategori" placeholder="Masukan Nama Kategori" value="{{$kategoris->nama_kategori}}">
                  </div>
                  <div class="col-12 mb-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
</div>

	
@endsection