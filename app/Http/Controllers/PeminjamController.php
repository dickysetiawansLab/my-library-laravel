<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Buku;
use App\Models\Peminjam;

class PeminjamController extends Controller
{
	 public function index(){
	 	$role = Auth::user()->role;
	 	$peminjams = Peminjam::all();
	 	return view('Peminjam/index', compact('peminjams'));		
	}
	public function tambah(){
	 	$role = Auth::user()->role;
	 	$users = User::all();
	 	$buku = Buku::all();
	 	return view('Peminjam/tambah', [
				'users' => $users,
				'buku'=> $buku
		]);
	}
	public function store(Request $request){
		$peminjams = $request -> validate([
			'nama_anggota'=>'required',
			'judul_buku' =>'required',
			'tanggal_peminjam'=>'required',
			'tanggal_pengembalian'=>'required',
			'kondisi_buku_saat_dipinjam'=>'required',
		]);
		$Verif_Peminjam = 'sedang meminjam';
		$Kodisi_Buku_dikembalikan = 'sedang meminjam';
		$Denda = 'sedang meminjam';

		DB::table('users')->where('username',$peminjams['nama_anggota'])->update([
			'verif'=> $Verif_Peminjam,
			
		]);
		$data_peminjam = [
			'nama_anggota'=> $peminjams['nama_anggota'],
			'judul_buku' => $peminjams['judul_buku'],
			'tanggal_peminjam'=> $peminjams['tanggal_peminjam'],
			'tanggal_pengembalian'=> $peminjams['tanggal_pengembalian'],
			'kondisi_buku_saat_dipinjam'=> $peminjams['kondisi_buku_saat_dipinjam'],
			'kondisi_buku_saat_dikembalikan' => $Kodisi_Buku_dikembalikan,
			'denda' => $Denda,
		];
		Peminjam::create($data_peminjam);
		return redirect('/data-peminjam');
	}
	public function edit(Request $request){
		$peminjams = Peminjam::find($request->id);	
		return view('Peminjam/edit', compact('peminjams'));
	}

	public function destroy(Request $request){
		$data_peminjam = Peminjam::find($request->id);	
		$data_peminjam->delete();
		return redirect('/data-peminjam');
	}
	public function update(Request $request){
		$validate = $request -> validate([
			'kondisi_buku_saat_dikembalikan' => 'required',
		]);
		$denda = [
			'Baik'=>'-',
			'Sobek'=>'Rp 50.000',
			'Telat pengembalian'=>'Rp 20.000',
		];
		if($validate['kondisi_buku_saat_dikembalikan'] == 'Sobek'){
			$data_peminjam = Peminjam::find($request->id);	
			$data_peminjam->kondisi_buku_saat_dikembalikan = $validate['kondisi_buku_saat_dikembalikan'];
			$data_peminjam->denda = $denda['Sobek'];
			$data_peminjam->update();
			return redirect('/data-peminjam');
		}elseif($validate['kondisi_buku_saat_dikembalikan'] == 'Telat pengembalian'){
			$data_peminjam = Peminjam::find($request->id);	
			$data_peminjam->kondisi_buku_saat_dikembalikan = $validate['kondisi_buku_saat_dikembalikan'];
			$data_peminjam->denda = $denda['Telat pengembalian'];
			$data_peminjam->update();
			return redirect('/data-peminjam');
		}else{
			$data_peminjam = Peminjam::find($request->id);	
			$data_peminjam->kondisi_buku_saat_dikembalikan = $validate['kondisi_buku_saat_dikembalikan'];
			$data_peminjam->denda = $denda['Baik'];
			$data_peminjam->update();
			return redirect('/data-peminjam');
		}
		

	}
}

?>