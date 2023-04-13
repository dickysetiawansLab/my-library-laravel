@extends('_template')

@section('title', 'Isi Pesan - D Perpus')

<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
<link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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
</style>
@section('konten')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800" style="font-weight: bold;">Isi Pesan</h1>
	<div class="row">
		<div class="col-md-3">
			<button class="btn btn-primary mb-3" style="width: 100%;">
				Kembali
			</button>
			<div class="card shadow ">
				<div class="card-header bg-gray-900" style="color: white;">
					Folders
				</div>
				<ul class="list-group list-group-flush">
					<a href="/inbox" class="list-group-item" style="color: black; text-decoration: none;"><i class="fas fa-inbox"></i> Inbox</a>
					<a href="/pesan-send" class="list-group-item" style="color: black; text-decoration: none;"><i class="far fa-envelope"></i> Sent</a>
          			<a href="/draf" class="list-group-item" style="color: black; text-decoration: none;"><i class="far fa-file-alt"></i> Draf</a>
					<a href="" class="list-group-item" style="color: black; text-decoration: none;"><i class="far fa-trash-alt"></i> Trash</a>
				</ul>
			</div>
		</div>


		<div class="col-md-9">
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
                <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button>
                @if($pesan->judul_pesan == 'meminjam' )
                  <button type="button" class="btn btn-default" onclick="window.location.href='/data-peminjam/tambah-peminjam/balas-pesan?id={{ $pesan->id }}'"><i class="fas fa-share"></i> Forward</button>
                @endif
              </div>
              <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
              <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
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
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>

<script src="/dist/js/demo.js"></script>
@endsection
