<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class snackController extends Controller
{
    public function indexsnack()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); --> JIKA TIDAK PAKAI PAGINATE
        $snack = DB::table('snack')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('index_snack',['snack' => $snack]);

    }

	public function carisnack(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$snack = DB::table('snack')
		->where('merksnack','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index_snack',['snack' => $snack]);

	}

    // method untuk menampilkan view form tambah pegawai
	public function tambahsnack()
	{

		// memanggil view tambah
		return view('tambah_snack');

	}

	// method untuk insert data ke table pegawai
	public function storesnack(Request $request)
	{
		// insert data ke table pegawai
		DB::table('snack')->insert([
			'merksnack' => $request->merk,
			'stocksnack' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/snack');

	}

	// method untuk edit data pegawai
	public function editsnack($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$snack = DB::table('snack')->where('kodesnack',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit_snack',['snack' => $snack]);

	}

	// update data pegawai
	public function updatesnack(Request $request)
	{
		// update data pegawai
		DB::table('snack')->where('kodesnack',$request->id)->update([
			'merksnack' => $request->merk,
			'stocksnack' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/snack');
	}

	// method untuk hapus data pegawai
	public function hapussnack($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('snack')->where('kodesnack',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/snack');
	}
}
