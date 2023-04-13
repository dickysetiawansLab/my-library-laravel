@extends('_template')

@section('title', 'Baca Komik di web - D Perpus')

@section('konten')
<div class="container-fluid" style="">
	@foreach($chapter as $ch)
        @if($ch->nama_komik == $k->nama_komik)
           <img src="{{ asset('images/chapter/'.$ch->img)  }}" style="margin: auto;display: block;" width="800">
        @endif
    @endforeach
</div>
@endsection