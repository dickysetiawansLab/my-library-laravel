<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Penerbit;
use App\Models\Kategori;
use Illuminate\Support\Facades\Str;

class AdminController extends Controller
{
	public function data_anggota(){
		$users = User::all();
		return view('Admin/data_anggota', [
				'users' => $users,

			]);
			// $password_verif = Hash::check($password, $password);	
			
	}
	public function tambah_anggota(){
		return view('Admin/tambah_anggota');
	}
	public function store_anggota(Request $request){
		$users = $request -> validate([
			'username'=>'required|unique:users',
			'password' =>'required|min:8|max:300',
			'nis'=>'required|unique:users',
			'fullname'=>'required',
			'kelas'=>'required',
			'alamat'=>'required',
		]);
		$users['password'] = Hash::make($users['password']);

		$kode_user = 'User'.random_int(1000, 9999).'2023';
		$role = 'anggota';
		$pengguna = new User();
		$pengguna->username = $users['username'];
		$pengguna->password = $users['password'];
		$pengguna->kode_user = $kode_user;
		$pengguna->nis = $users['nis'];
		$pengguna->fullname = $users['fullname'];
		$pengguna->kelas = $users['kelas'];
		$pengguna->alamat = $users['alamat'];
		$pengguna->role = $role;
		$pengguna->save();

		return redirect('/data/anggota');

	}
	public function destroy(Request $request){

		$users = User::find($request->id);
		$users->delete();
		return redirect('/data/anggota');

	}

	public function data_admin(){
		$role = Auth::user()->role;
		$users = User::all();
		return view('Admin/data_admin', [
				'users' => $users,

			]);
	}

	public function tambah_admin(){
		return view('Admin/tambah_admin');
	}
	public function store_admin(Request $request){
	$users = $request -> validate([
			'username'=>'required',
			'password' =>'required|min:8|max:300',
			'fullname'=>'required',
		]);
		$users['password'] = Hash::make($users['password']);

		$role = 'admin';
		$admin = new User();
		$admin->username = $users['username'];
		$admin->password = $users['password'];
		$admin->fullname = $users['fullname'];
		$admin->role = $role;
		$admin->save();

		return redirect('/data/admin');
	}

}








?>