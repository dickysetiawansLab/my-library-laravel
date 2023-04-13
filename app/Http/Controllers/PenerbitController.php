<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Penerbit;
use Illuminate\Support\Facades\Schema;

class PenerbitController extends Controller
{
	public function index(){
		$penerbits = Penerbit::all();
		return view('Penerbit/index', [
				'penerbits'=> $penerbits
			]);		
	}
	public function tambah(){
		return view('Penerbit/tambah');		
	}
	public function store(Request $request){
		$koderandom_penerbit = random_int(10000, 99999);
		$penerbits = $request -> validate([
			// 'kode_penerbit'=>'required|unique:penerbits',
			'nama_penerbit' =>'required',
			'verif_penerbit'=>'required',
		]);
		$data_penerbits = [
			'kode_penerbit' => $koderandom_penerbit,
			'nama_penerbit' => $penerbits['nama_penerbit'],
			'verif_penerbit'=> $penerbits['verif_penerbit'],
		];
		Penerbit::create($data_penerbits);
		return redirect('/data/penerbit');
	}
	public function edit(Request $request){
		$role = Auth::user()->role;
		$penerbits = Penerbit::find($request->id);
		return view('Penerbit/edit', compact('penerbits'));
	}
	public function update(Request $request){
		$validate = $request -> validate([
			'kode_penerbit' =>'required|unique:penerbits',
			'nama_penerbit'=>'required',
			'verif_penerbit'=>'required',
		]);

		$penerbits = Penerbit::find($request->id);
		$penerbits->kode_penerbit = $validate['kode_penerbit'];
		$penerbits->nama_penerbit = $validate['nama_penerbit'];
		$penerbits->verif_penerbit = $validate['verif_penerbit'];
		$penerbits->update();
		return redirect('/data/penerbit');
	}
	public function destroy(Request $request){
		$role = Auth::user()->role;
		$penerbits = Penerbit::find($request->id);
		$penerbits->delete();
		return redirect('/data/penerbit');		
	}
} 


?>