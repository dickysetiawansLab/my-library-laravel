@extends('_template')

@section('title', 'Tambah Chapter Komik - D Perpus')

@section('konten')
<div class="container-fluid">
	<h1>Tambah Komik</h1>
	<form action="/data-komik/tambah-komik" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="text" name="nama_komik" placeholder="nama komik" class="mb-2"><br>
		<input type="text" name="slug" placeholder="title" class="mb-2"><br>
		<input type="text" name="genre" placeholder="genre" class="mb-2"><br>
		<input type="text" name="sinopsis" placeholder="sinopsis" class="mb-2"><br>
		<input type="file" name="image" class="mb-2"><br>
		@error('image')
                     <span class="text-danger">{{ $message }}</span>
        @enderror
		<button type="sumbit"> Tambah </button>
	</form>
</div>
@endsection

@section('footer')

@endsection