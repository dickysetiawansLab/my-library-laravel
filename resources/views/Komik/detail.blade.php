@extends('_template')

@section('title', 'Baca Komik di web - D Perpus')

<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
<link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<style type="text/css">
.product-image {
  max-width: 100%;
  height: auto;
  width: 100%;
}
.product-image-thumbs {
  -ms-flex-align: stretch;
  align-items: stretch;
  display: -ms-flexbox;
  display: flex;
  margin-top: 2rem;
}
.product-image-thumb {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
  border-radius: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  display: -ms-flexbox;
  display: flex;
  margin-right: 1rem;
  max-width: 7rem;
  padding: 0.5rem;
}
.product-image-thumb img {
  max-width: 100%;
  height: auto;
  -ms-flex-item-align: center;
  align-self: center;
}

</style>
@section('konten')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800" style="font-weight: bold;">{{ $k->nama_komik }}</h1>
	<section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">{{ $k->nama_komik }}</h3>
              <div class="col-12" >
                <img src="{{ asset('images/'.$k->img)  }}" class="product-image" alt="Product Image" height="400"style="border-radius: 10px;">
              </div>
             
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $k->nama_komik }}</h3>
              <p>{{$k->sinopsis}}</p>
              <hr>
              <div class="">
                <h6>{{ $k->genre }}</h6>
              </div>

              <div class="mt-4">
                <div class="btn btn-primary btn-lg btn-bookmark">
                  Bookmark
                </div>

                <button class="btn btn-default btn-lg btn-flat" onclick="window.location.href='/komik/{{$k->slug}}/like'" style="background-color: #ddd;">
                  <i class="fas fa-heart fa-lg mr-2"></i>
                  Add to Wishlist
                </button>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Chapter</a>
               
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                  @foreach($chapter as $ch)
                    @if($ch->nama_komik == $k->nama_komik)
                      <a href="/komik/{{$k->slug}}/{{$ch->chapter}}">{{ $ch->chapter }}</a><br>
                    @endif
                  @endforeach
              
              </div>
            </div>
          </div>
        </div>

        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
</div>
@endsection
@section('footer')
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
@endsection