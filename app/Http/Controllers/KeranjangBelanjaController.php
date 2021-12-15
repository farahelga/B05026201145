<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table keranjangbelanja
    	//

        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(5);

    	// mengirim data keranjangbelanja ke view index
    	return view('keranjangbelanja.index',['keranjangbelanja' => $keranjangbelanja]);

    }

    // method untuk menampilkan view form tambah barang
    public function tambah()
    {

        // memanggil view tambah
        return view('keranjangbelanja.tambah');
    }

   // method untuk insert data ke table keranjangbelanja
   public function store(Request $request)
   {
       // insert data ke table keranjangbelanja
       DB::table('keranjangbelanja')->insert([
           'KodeBarang' => $request->KodeBarang,
           'Jumlah' => $request->Jumlah,
           'Harga' => $request->Harga
       ]);
       // alihkan halaman ke halaman keranjangbelanja
       return redirect('/keranjangbelanja');

   }

    // method untuk hapus data keranjangbelanja
    public function hapus($id)
    {
        // menghapus data keranjangbelanja berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID',$id)->delete();

        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }



}
