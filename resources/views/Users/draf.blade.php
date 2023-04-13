@extends('_template')

@section('title', 'Inbox - D Perpus')

<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
<link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


@section('konten')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800" style="font-weight: bold;">Pesan Masuk</h1>
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
                <h3 class="card-title">Inbox</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Search Mail">
                    <div class="input-group-append">
                      <div class="btn btn-primary">
                        <i class="fas fa-search mt-1"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-sync-alt"></i>
                </button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  	@foreach( $pesans as $p)
                  		@if($p->status == 'draf' )
                  			@if( $p->penerima == auth()->user()->username )
			                  	<tr>
				                    <td>
				                      <div class="icheck-primary">
				                        <input type="checkbox" value="" id="check1">
				                        <label for="check1"></label>
				                      </div>
				                    </td>
				                   	<td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
				                    <td class="mailbox-name"><a href="/inbox/draf?id={{ $p->id }}">{{ $p->pengirim }}</a></td>
				                    <td class="mailbox-subject"><b>{{ $p->judul_pesan }}</b> - {!! Str::limit($p->isi_pesan, 100, '...') !!}
				                    </td>
				                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
				                    <td class="mailbox-date">28 mins ago</td>
			                	</tr>
			                @else
			                	<tr>
			                		<td>
			                			Belum ada pesan masuk
			                		</td>
			                	</tr>
			               	@endif
	                  @endif
                 @endforeach 
                 
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                  <i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-sync-alt"></i>
                </button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
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
<script>
  $(function () {
    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function () {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
        $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
        $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      $(this).data('clicks', !clicks)
    })

    //Handle starring for font awesome
    $('.mailbox-star').click(function (e) {
      e.preventDefault()
      //detect type
      var $this = $(this).find('a > i')
      var fa    = $this.hasClass('fa')

      //Switch states
      if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
      }
    })
  })
</script>
@endsection