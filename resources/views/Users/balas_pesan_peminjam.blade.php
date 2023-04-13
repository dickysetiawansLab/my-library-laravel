@extends('_template')

@section('title', 'Isi Pesan - D Perpus')

<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
<link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<style type="text/css">
	.mailbox-read-info {
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
  padding: 10px;
}

.mailbox-read-info h3 {
  font-size: 20px;
  margin: 0;
}

.mailbox-read-info h5 {
  margin: 0;
  padding: 5px 0 0;
}
.mailbox-read-message {
  padding: 10px;
}
.card-title {
  margin-bottom: 0.75rem;
  float: left;
  font-size: 1.1rem;
  font-weight: 400;
  margin: 0;
}
.select2-container--default .select2-selection--single {
  border: 1px solid #ced4da;
  padding: 0.46875rem 0.75rem;
  height: calc(2.25rem + 2px);
}

.select2-container--default.select2-container--open .select2-selection--single {
  border-color: #80bdff;
}

.select2-container--default .select2-dropdown {
  border: 1px solid #ced4da;
}

.select2-container--default .select2-results__option {
  padding: 6px 10px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
  padding-left: 0;
  height: auto;
  margin-top: -3px;
}

</style>
@section('konten')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800" style="font-weight: bold;">Tambah Data Peminjam</h1>
	<div class="row mb-5">
		<div class="col-md-4">
			<button class="btn btn-primary mb-3" style="width: 100%;">
				Kembali
			</button>
			<div class="card shadow ">
          <div class="card-body">
            <form class="row g-3" action="/data-peminjam/tambah-peminjam/balas-pesan?id={{ $pesan->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 mb-2">
                        <label for="inputNamaanggota" class="form-label">Nama Anggota</label>
                        <select id="inputNamaanggota" class="custom-select" name="nama_anggota">                   
                            <option>{{ $pesan->pengirim }}</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label>Judul buku</label>
                          <select class="form-control select2" style="width: 100%;" name="judul_buku">
                            @foreach($buku as $b)
                                <option>{{ $b->judul_buku }}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <label for="inputTanggal" class="form-label">Tanggal Peminjaman</label>
                      <input type="date" class="form-control" id="inputTanggal" required="" name="tanggal_peminjam">
                    </div>
                    <div class="col-md-6 mb-3">
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
                    <div class="col-md-12 mb-2">
                        <label for="inputKondisiBuku" class="form-label">Verif meminjam</label>
                        <select id="inputKondisiBuku" class="custom-select" name="status">
                        <option selected>{{ $pesan->judul_pesan }}</option>
                            <option>Terverifikasi meminjam</option>    
                        </select>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                  </form>
          </div>
             
                
			</div>
		</div>


		<div class="col-md-8">
          <div class="card card-primary card-outline">
            <div class="card-header">
            	<div class="row justify-content-between">
            		<h3 class="card-title">Read Mail</h3>

	              <div class="card-tools">
	                <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
	                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
	              </div>
            	</div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5>{{ $pesan->judul_pesan }}</h5>
                <h6>From: {{ $pesan->pengirim }}
                  <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span></h6>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Delete">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Reply">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Forward">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" title="Print">
                  <i class="fas fa-print"></i>
                </button>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
              	{!! $pesan->isi_pesan !!}
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-footer -->
            <div class="card-footer">
              <div class="float-right">
                
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
          
        </div>
       
	</div>
</div>
@endsection

@section('footer')
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->


<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  })
</script>
@endsection
