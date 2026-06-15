<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanAirController extends Controller
{
    public function indextagihanair()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); --> JIKA TIDAK PAKAI PAGINATE
        $tagihan_air = DB::table('tagihan_air')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('index_tagihan_air',['tagihan_air' => $tagihan_air]);

    }

	public function caritagihanair(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$tagihan_air = DB::table('tagihan_air')
		->where('NoMeteran','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index_tagihan_air',['tagihan_air' => $tagihan_air]);

	}

    // method untuk menampilkan view form tambah pegawai
	public function tambahtagihanair()
	{

		// memanggil view tambah
		return view('tambah_tagihan_air');

	}

	// method untuk insert data ke table pegawai
	public function storetagihanair(Request $request)
	{
        $MeterAwal  = $request->MeterAwal;
        $MeterAkhir  = $request->MeterAkhir;

        $MeterTotal = $MeterAkhir - $MeterAwal;
        $TagihanTotal = $MeterTotal * 5000;
		// insert data ke table pegawai
		DB::table('tagihan_air')->insert([
			'NoMeteran' => $request->NoMeteran,
			'MeterAwal' => $request->MeterAwal,
			'MeterAkhir' => $request->MeterAkhir,
            'MeterTotal' => $MeterTotal,
            'TagihanTotal' => $TagihanTotal,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/tagihan_air');

	}

	// method untuk edit data pegawai
	public function edittagihanair($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$snack = DB::table('tagihan_air')->where('NoMeteran',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit_tagihan_air',['tagihan_air' => $tagihan_air]);

	}

// 	// update data pegawai
// 	public function updatetagihanair(Request $request)
// 	{
// 		// update data pegawai
// 		DB::table('snack')->where('kodesnack',$request->id)->update([
// 			'merksnack' => $request->merk,
// 			'stocksnack' => $request->stock,
// 			'tersedia' => $request->tersedia
// 		]);
// 		// alihkan halaman ke halaman pegawai
// 		return redirect('/snack');
// 	}

// 	// method untuk hapus data pegawai
// 	public function hapussnack($id)
// 	{
// 		// menghapus data pegawai berdasarkan id yang dipilih
// 		DB::table('snack')->where('kodesnack',$id)->delete();

// 		// alihkan halaman ke halaman pegawai
// 		return redirect('/snack');
// 	}
}
