<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class berasController extends Controller
{
    public function indexBeras()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); --> JIKA TIDAK PAKAI PAGINATE
        $beras = DB::table('beras')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('index_beras',['beras' => $beras]);

    }

	public function cariBeras(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$beras = DB::table('beras')
		->where('merkberas','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index_beras',['beras' => $beras]);

	}

    // method untuk menampilkan view form tambah pegawai
	public function tambahBeras()
	{

		// memanggil view tambah
		return view('tambah_beras');

	}

	// method untuk insert data ke table pegawai
	public function storeBeras(Request $request)
	{
		// insert data ke table pegawai
		DB::table('beras')->insert([
			'merkberas' => $request->merk,
			'stockberas' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/beras');

	}

	// method untuk edit data pegawai
	public function editBeras($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$beras = DB::table('beras')->where('kodeberas',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit_beras',['beras' => $beras]);

	}

	// update data pegawai
	public function updateBeras(Request $request)
	{
		// update data pegawai
		DB::table('beras')->where('kodeberas',$request->id)->update([
			'merkberas' => $request->merk,
			'stockberas' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/beras');
	}

	// method untuk hapus data pegawai
	public function hapusBeras($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('beras')->where('kodeberas',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/beras');
	}
}
