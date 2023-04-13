@extends('_template')

@section('title', 'Kirim Pesan - D Perpus')
<link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">

<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
<link rel="stylesheet" href="/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
<link rel="stylesheet" href="/plugins/dropzone/min/dropzone.min.css">

@section('konten')
 
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800" style="font-weight: bold;">Kirim pesan</h1>
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
			<div class="card shadow card-primary card-outline">
				<div class="card-header">
                	<h5 class="card-title">Buat Pesan Baru</h5>
            	</div>
            	<form class="form-group" method="post">
            		@csrf	
            		<div class="card-body row">

            			<div class="col-12 mb-3 row">
            				<label class="col-2">Kepada:</label>
            				<div class="col-10">
            					<select class="form-control select2bs4" style="width: 100%;" name="penerima">
				                   	@foreach($users as $u)
				                   		@if( auth()->user()->role == 'anggota')
				                   			@if($u->role == 'anggota')
				                   				<option>{{ $u->username }}</option>
				                   			@endif
				                   		@else
				                   			<option>{{ $u->username }}</option>		                    	
					                    @endif
				                    @endforeach
				                  </select>
            				</div>
            				
            			</div>
            			<div class="col-12 mb-3">
            				<input type="text" class="form-control" name="judul_pesan" placeholder="Judul:">
            			</div>
            			<div class="col-12 mb-2">
            				<textarea id="compose-textareas" class="form-control" style="height: 300px" name="isi_pesan">
            					
            				</textarea>
            			</div>
					</div>
					<div class="card-footer">
						@if(session()->has('Draf'))
							<p class="danger">{{session('Draf')}}</p>

						@endif
                		<div class="float-right">

			                  <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
			                </div>
			              
			            </div>
            	</form>
            	
            	
			</div>
		</div>
	</div>

</div>

@endsection
@section('footer')
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
    <!-- Summernote -->
    <script src="/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
    <script src="/plugins/select2/js/select2.full.min.js"></script>
	<script src="/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
	<!-- InputMask -->
	<script src="/plugins/moment/moment.min.js"></script>
	<script src="/plugins/inputmask/jquery.inputmask.min.js"></script>
	<!-- date-range-picker -->

	<!-- dropzonejs -->
	<script src="/plugins/dropzone/min/dropzone.min.js"></script>
	<!-- AdminLTE App -->
    <script>
      $(function () {
        //Add text editor
        $('#compose-textareas').summernote()
        $('.select2bs4').select2({
	      theme: 'bootstrap4'
	    })


      })

    </script>
@endsection

