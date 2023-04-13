<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Kategori;

class KategoriController extends Controller
{
	public function index(){
		$kategoris = Kategori::all();
		return view('Kategori/index', ['kategoris'=> $kategoris]);
	}
	public function tambah(){
		return view('Kategori/tambah');
	}
	public function store(Request $request){
		$kode_random_kategori = random_int(10000, 99999);
		$kategoris = $request -> validate([
			// 'kode_kategori'=>'required|unique:kategoris',
			'nama_kategori' =>'required',
		]);
		$data_kategoris = [
			'kode_kategori'=> $kode_random_kategori,
			'nama_kategori'=> $kategoris['nama_kategori'],
		];
		Kategori::create($data_kategoris);
		return redirect('/data/kategori');
	}
	public function edit(Request $request){
		$role = Auth::user()->role;
		$kategoris = Kategori::find($request->id);
		return view('Kategori/edit', compact('kategoris'));	
	}
	public function update(Request $request){
		$validate = $request -> validate([
			'kode_kategori' =>'required',
			'nama_kategori'=>'required',
		]);

		$kategoris = Kategori::find($request->id);
		$kategoris->kode_kategori = $validate['kode_kategori'];
		$kategoris->nama_kategori = $validate['nama_kategori'];
		$kategoris->update();
		return redirect('/data/kategori');
	}
	public function destroy(Request $request){
		$role = Auth::user()->role;
		$kategoris = Kategori::find($request->id);
		$kategoris->delete();
		return redirect('/data/kategori');	
	}
}
?>