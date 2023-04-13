@extends('_template')

@section('title', 'Tambah Anggota - D Perpus')


@section('konten')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 ">
         <div class="card shadow mb-4 border-left-primary">
       <div class="card-body"style="margin: 25px;">
         <h4 class="mb-4" style="font-weight: bold;">Tambahkan Anggota Baru</h4>
            <form class="row g-3" action="/data/anggota/tambah" method="post" enctype="multipart/form-data" >
              @csrf
              <div class="col-md-12 mb-2">
                <label for="inputUsername" class="form-label">Nama Pengguna</label>
                <input type="text" 
                  class="form-control" 
                  id="inputUsername" 
                  required="" 
                  name="username" 
                  placeholder="Masukan Nama Pengguna">
              </div>
              <div class="col-md-12 mb-2">
                <label for="inputUsername" class="form-label">Password</label>
                <input type="password" 
                  class="form-control" 
                  id="inputUsername" 
                  required="" 
                  name="password" 
                  placeholder="Masukan Password">
              </div>
              <div class="col-12 mb-2">
                  <label for="inputISBN" class="form-label">NIS</label>
                  <input type="text"
                    class="form-control" 
                    id="inputnis"
                    required="" 
                    name="nis" 
                    placeholder="Masukan nis">
                </div> 
                <div class="col-12 mb-2">
                  <label for="inputNama_lengkap" class="form-label">Nama Lengkap</label>
                  <input type="text" 
                    class="form-control" 
                    id="inputNama_lengkap" 
                    required="" 
                    name="fullname" 
                    placeholder="Masukan Nama Lengkap"> 
                </div>
                <div class="col-12 mb-2">
                  <label for="inputKelas" class="form-label">Kelas</label>
                  <input type="text" 
                  class="form-control" 
                  id="inputKelas" 
                  required="" 
                  name="kelas" 
                  placeholder="Masukan Kelas">
                </div>
                <div class="col-12 mb-2">
                  <label for="inputAlamat" class="form-label">Alamat</label>
                  <input type="text" 
                    class="form-control" 
                    id="inputAlamat" 
                    required=""
                    name="alamat" 
                    placeholder="Masukan Alamat">
                </div>
                <div class="col-12 mb-2 mt-3">
                  <button type="submit" class="btn btn-primary" name="submit" style="width: 100%;">Tambah</button>
                </div>
            </form>
       </div>
    </div>
      </div>
    </div>
   
  </div>
@endsection
