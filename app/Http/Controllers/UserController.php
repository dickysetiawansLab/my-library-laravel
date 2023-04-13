<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Pesan;
use App\Models\Buku;
use App\Models\Peminjam;

class UserController extends Controller
{
	public function index(){
		return view('Users/index');
	}
	public function edit(Request $request){
		$id = Auth::user()->id;
		$nama = Auth::user()->username;
		$users = $request -> validate([
			'username'=>'required|unique:users',
			'kode_user' =>'required|unique:users',
			'nis'=>'required|unique:users',
			'fullname'=>'required',
			'kelas'=>'required',
			'alamat'=>'required',
		]);
		$user = User::find($id);
		$user->username = $users['username'];
		$user->kode_user = $users['kode_user'];
		$user->nis = $users['nis'];
		$user->fullname = $users['fullname'];
		$user->kelas = $users['kelas'];
		$user->alamat = $users['alamat'];
		$user->update();

		return redirect('/user/{$nama}');
	}
	public function inbox(){
		$pesans =Pesan::all();
		return view('Users/inbox', [
			'pesans'=> $pesans,
		]);
	}
	public function pesan(Request $request){
		$pesan = Pesan::find($request->id);
		return view('Users/pesan', compact('pesan'));
	}

	public function draf(){
		$pesans =Pesan::all();
		return view('Users/draf', [
			'pesans'=> $pesans,
		]);
	}
	public function isi_draf(Request $request){
		$pesan = Pesan::find($request->id);
		return view('Users/isi_draf', compact('pesan'));
	}

	public function send_pesan(){
		$users = User::all();
		return view('Users/send_pesan',[
			'users'=> $users,
		]);
	}
	public function kirim(Request $request){
		$pengirims = Auth::user()->username;
		if($request['files'] == null){
			$data = $request -> validate([
				'penerima'=>'required',
				'judul_pesan'=>'required',
				'isi_pesan'=>'required',
			]);
			
			$data_pesan = [
				'penerima' => $data['penerima'],
				'pengirim' => $pengirims,
				'judul_pesan' => $data['judul_pesan'],
				'isi_pesan' => $data['isi_pesan'],
				'status' => []
			];
			if ( $data['penerima'] == $pengirims) {
				$data_pesan['status'] = 'draf';
				$request->session()->flash('Draf','Karena nama penerima sama, secara otomatis akan di masukan kedalam draf');
			}else{
				$data_pesan['status'] = 'Terkirim';
			}

			Pesan::create($data_pesan);

			return redirect('/pesan-send');
		}else{
			return back()->with('ErorPesan','Pesan Tidak bisa terkirim di karenakan ada file gambar!');
		}	
	}

	public function peminjaman(Request $request){
		$data_buku = Buku::find($request->id);
		return view('Users/pesan_pinjam_buku', compact('data_buku'));
	}
	public function pesan_peminjaman(Request $request){
		$pesan = new Pesan();
		$pengirims = Auth::user()->username;
		
		if($request['files'] == null){
			$data = $request -> validate([
				'penerima'=>'required',
				'isi_pesan'=>'required',
			]);
			$judul= 'meminjam';
			$data_pesan = [
				'penerima' => $data['penerima'],
				'pengirim' => $pengirims,
				'judul_pesan' => $judul,
				'isi_pesan' => $data['isi_pesan'],
				'status' => []
			];


			if ( $data['penerima'] == $pengirims) {
				$data_pesan['status'] = 'draf';
				$request->session()->flash('Draf','Karena nama penerima sama, secara otomatis akan di masukan kedalam draf');
			}else{
				$data_pesan['status'] = 'Terkirim';
			}
			$pesan->penerima = $data_pesan['penerima'];
			$pesan->pengirim = $data_pesan['pengirim'];
			$pesan->judul_pesan = $judul;
			$pesan->isi_pesan = $data_pesan['isi_pesan'];
			$pesan->status = $data_pesan['status'];
			$pesan->save();
			// Pesan::create($data_pesan);

			return redirect('/');
		}else{
			return back()->with('ErorPesan','Pesan Tidak bisa terkirim di karenakan ada file gambar!');
		}
	}
	public function balas_pesan_peminjam(Request $request){
		$pesan = Pesan::find($request->id);
		$buku = Buku::all();
		return view('Users/balas_pesan_peminjam', compact('pesan','buku'));
	}
	
	public function store_balas_pesan_peminjam(Request $request){
		$pesan = new Pesan();
		$data_pesans_peminjam = Pesan::find($request->id);

		$peminjams = $request -> validate([
			'nama_anggota'=>'required',
			'judul_buku' =>'required',
			'tanggal_peminjam'=>'required',
			'tanggal_pengembalian'=>'required',
			'kondisi_buku_saat_dipinjam'=>'required',
			'status'=>'required',
		]);
		$Kodisi_Buku_dikembalikan = 'sedang meminjam';
		$Denda = 'sedang meminjam';
		$isi_pesan = '
			<h1 class="mb-3">Buku yang anda ingin pinjam telah terkonfirmasi silahkan datang pada tanggal</h1>
		'.$peminjams['tanggal_peminjam'];
		$status = 'Terkirim';
		$data_peminjam = [
			'nama_anggota'=> $peminjams['nama_anggota'],
			'judul_buku' => $peminjams['judul_buku'],
			'tanggal_peminjam'=> $peminjams['tanggal_peminjam'],
			'tanggal_pengembalian'=> $peminjams['tanggal_pengembalian'],
			'kondisi_buku_saat_dipinjam'=> $peminjams['kondisi_buku_saat_dipinjam'],
			'kondisi_buku_saat_dikembalikan' => $Kodisi_Buku_dikembalikan,
			'denda' => $Denda,
		];
		

		$pesan->penerima = $data_pesans_peminjam['pengirim'];
		$pesan->pengirim = $data_pesans_peminjam['penerima'];
		$pesan->judul_pesan = $peminjams['status'];
		$pesan->isi_pesan = $isi_pesan;
		$pesan->status = $status;
		$pesan->save();

		$data_pesans_peminjam->delete();
		Peminjam::create($data_peminjam);
		return redirect('/data-peminjam');
	}
}

?>