@extends('_template')

@section('title', 'Tambah Chapter Komik - D Perpus')

@section('konten')
<div class="container-fluid">
	<form action="/data-komik/tambah-chapter-komik" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="text" name="nama_komik" placeholder="nama komik">
		<input type="text" name="chapter" placeholder="chapter">
		<input type="file" name="image[]" multiple>
		@error('image[]')
                      <span class="text-danger">{{ $message }}</span>
        @enderror
		<button type="sumbit"> Tambah </button>
	</form>
</div>
@endsection

@section('footer')

@endsection