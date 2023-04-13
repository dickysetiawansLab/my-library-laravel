@extends('_template')

@section('title', 'Review Buku - D Perpus')

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
	<h1 class="h3 mb-4 text-gray-800" style="font-weight: bold;">Review Buku</h1>
	<section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">{{ $buku->judul_buku }}</h3>
              <div class="col-12" >
                <img src="{{ asset('images/'.$buku->image)  }}" class="product-image" alt="Product Image" height="400"style="border-radius: 10px;">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="{{ asset('images/'.$buku->image)  }}" alt="Product Image"></div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $buku->judul_buku }}</h3>
         
              <hr>
               <h4 class="mt-3 mb-3">Kategori:</h4>
              <div class="">
                <h6>{{ $buku->kategori_buku }}</h6>
              </div>

              <h4 class="mt-3 mb-3">Pengarang</h4>
              <div class="mb-3">
                <h6>{{ $buku->pengarang }}</h6>
              </div>

              <h4 class="mt-3 mb-3">Penerbit</h4>
              <div class="mb-4">
                <h6>{{ $buku->penerbit_buku }}</h6>
              </div>
              <form action="/buku/peminjaman?id={{$buku->id}}" method="post">
              	@csrf
              	<button class="btn btn-dark">
              		<h2 class="mb-0">
              		Pinjam Buku
              	</h2>
              	</button>
              </form>
              <div class="mt-4">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Add to Cart
                </div>

                <div class="btn btn-default btn-lg btn-flat" style="background-color: #ddd;">
                  <i class="fas fa-heart fa-lg mr-2"></i>
                  Add to Wishlist
                </div>
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