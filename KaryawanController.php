<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Reminders\tambahkaryawan;
use Illuminate\Auth\UserInterface;

class KaryawanController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('karyawan')->get();

        //dipilih salah satu

        //mengambil data dari tabel per page
        //$pegawai = DB::table('pegawai')->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('indexkaryawan',['pegawai' => $pegawai]);

    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

	// memanggil view tambah
	return view('tambahkaryawan');

}
// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen,

	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');

}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
}


}
