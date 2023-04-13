<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Buku;
use App\Models\Peminjam;

class DashboardController extends Controller
{
	public function index(){
		$user_count = User::where('role', 'anggota')->get()->count();
		$buku_count = Buku::get()->count();
		$meminjam = Peminjam::where('kondisi_buku_saat_dikembalikan', 'sedang meminjam')->get()->count();
		$dikembalikan = Peminjam::whereNotNull('kondisi_buku_saat_dikembalikan')->get()->count();
		return view('index', compact('user_count','buku_count', 'meminjam','dikembalikan'));
	}

}










?>