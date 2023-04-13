@extends('_template')

@section('title', 'Daftar Komik - D Perpus')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="/plugins/ekko-lightbox/ekko-lightbox.css">
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <style type="text/css">
  	.content-wrapper.kanban {
  height: 1px;
}

.content-wrapper.kanban .content {
  height: 100%;
  overflow-x: auto;
  overflow-y: hidden;
}

.content-wrapper.kanban .content .container,
.content-wrapper.kanban .content .container-fluid,
.content-wrapper.kanban .content .container-sm,
.content-wrapper.kanban .content .container-md,
.content-wrapper.kanban .content .container-lg,
.content-wrapper.kanban .content .container-xl {
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: stretch;
  align-items: stretch;
}

.content-wrapper.kanban .content-header + .content {
  height: 450px;
}

.content-wrapper.kanban .card .card-body {
  padding: .5rem;
}

.content-wrapper.kanban .card.card-row {
  width: 250px;
  display: inline-block;
  margin: 0 .5rem;
}

.content-wrapper.kanban .card.card-row:first-child {
  margin-left: 0;
}

.content-wrapper.kanban .card.card-row .card-body {
  height: calc(100% - (12px + (1.8rem * 1.2) + .5rem));
  overflow-y: auto;
}

.content-wrapper.kanban .card.card-row .card:last-child {
  margin-bottom: 0;
  border-bottom-width: 1px;
}

.content-wrapper.kanban .card.card-row .card .card-header {
  padding: .5rem .75rem;
}

.content-wrapper.kanban .card.card-row .card .card-body {
  padding: .75rem;
}

.content-wrapper.kanban .btn-tool.btn-link {
  text-decoration: underline;
  padding-left: 0;
  padding-right: 0;
}
  </style>
@section('konten')
	<div class="content-wrapper kanban">
	    <section class="content-header">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-sm-6">
	            <h1>Daftar Komik</h1>
	          </div>
	        </div>
	      </div>
	    </section>
	    <section class="content pb-3">
	      <div class="container-fluid h-100">
	      	@foreach($komik as $k)
		      	<div class="card card-row card-primary">
		      		<a href="/komik/{{$k->slug}}">
			      		<div style="margin: 7px;">
			               <img src="{{ asset('images/'.$k->img)  }}" class="card-img-top" alt="..." height="300">
		                	</div>
				         <div class="card-body">
		                    <h5 class="card-title" style="font-weight: bold; margin-bottom: 10px;">{{ $k->nama_komik }}</h5>
		                    <p class="card-text"><br> </p>
		                    
		                </div>
		      		</a>
		        </div>
		    @endforeach
	      </div>
	    </section>
  </div>
@endsection

@section('footer')
<!-- Bootstrap -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- Filterizr-->
<script src="/plugins/filterizr/jquery.filterizr.min.js"></script>

<script>
  $(function () {

  })
</script>
@endsection