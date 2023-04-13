@extends('_template')

@section('title', 'Buku')

@section('konten')

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Tambah Buku</h1>
   <p class="mb-2">Tambah kan buku baru yang belum terdaftar di perpus kami</p>
   <button class="btn btn-dark mb-4" style=" font-size: 1.2rem;" onclick="window.location.href='/buku'">Kembali <i class='bx bx-book'></i></button>

  <div class="card shadow mb-4">
    <div class="card-body">
                <form class="row g-3" action="/buku/tambah" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="col-md-6 mb-2">
                    <label for="inputEmail4" class="form-label">Nama Buku</label>
                    <input type="text" class="form-control" id="inputEmail4" required="" name="judul_buku" placeholder="Masukan Nama Buku">
                  </div>
                  <div class="col-md-6 mb-2">
                      <label for="inputKategori" class="form-label">Kategori</label>
                      <select id="inputState" class="custom-select" name="kategori_buku">
                      <option selected>Masukan Penerbit.....</option>
                      @foreach($kategoris as $kategori)
                        <option>{{ $kategori->nama_kategori }}</option>
                      @endforeach
                      </select>
                  </div>
                  <div class="col-12 mb-2">
                      <label for="inputpenerbit" class="form-label">Penerbit</label>
                      <select class="custom-select" id="inputpenerbit" name="penerbit_buku">
                      <option selected>Masukan Penerbit.....</option>
                      @foreach($penerbits as $penerbit)
                        <option>{{ $penerbit->nama_penerbit }}</option>
                      @endforeach
                      </select>
                  </div>
                  <div class="col-12 mb-2">
                    <label for="inputPengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="inputPengarang" required="" name="pengarang" placeholder="Masukan Pengarang">
                  </div>
                  <div class="col-12 mb-2">
                    <label for="inputTahun_Terbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="inputTahun_Terbit" required="" name="tahun_terbit" placeholder="Masukan Tahun Terbit">
                  </div>
                  <div class="col-12 mb-2">
                    <label for="inputISBN" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="inputISBN" required="" name="isbn" placeholder="Masukan Isbn">
                  </div>
                  <div class="col-12 mb-2">
                    <label for="inputbuku_baik" class="form-label">Buku Baik</label>
                    <input type="text" class="form-control" id="inputbuku_baik" required="" name="id_buku_baik" placeholder="Masukan Buku Baik">
                  </div>
                  <div class="col-12 mb-2">
                    <label for="inputBuku_Rusak" class="form-label">Buku Rusak</label>
                    <input type="text" class="form-control" id="inputBuku_Rusak" required="" name="id_buku_rusak" placeholder="Masukan Buku Rusak">
                  </div>
                  <div class="col-12 mb-2">
                    <label for="inputBuku_Rusak" class="form-label">Gambar</label>
                    <div class="input-group mb-3">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02" required="" name="image" placeholder="Masukan Buku Rusak">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                      </div>
                    </div>
                  </div>
                    @error('image')
                      <span class="text-danger">{{ $message }}</span>
              @enderror
                  <div class="col-12 mb-2">
                    <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
                  </div>
  
                </form>
            </div>
          </div>
  </div>
</div>
	
	
@endsection
