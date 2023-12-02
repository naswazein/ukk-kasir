<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    function deleteproduk($id){
        $deleted=DB::table('produk')->where('ProdukID', $id)->delete();
        if($deleted){
           return redirect()->back();
        }

    function prosesproduk(Request $request)
    {
     //validasi
     $request->validate();
    // return Auth::user();
    // $isipengaduan = $request->isilaporan;
    $tambahproduk = $request->tambahproduk;

    DB::table('produk')->insert([
        'ProdukID' => Auth::user()->ID,
        'NamaProduk' => Auth::user()->ID,
        'Harga' => $tambahproduk,
        'foto' => $request->foto->getClientOriginalName(),
        'Stok' => '0'
    ]);
// return redirect('/tampilpengaduan');
}


    function tampilpelanggan()
    {
        $judul = "Selamat Datang";
        $produk = DB::table('pelanggan')->get();

        $pelanggan = DB::where('id' , Auth::user()->id)->get();
        // return view('datapelanggan' , ['judul' => $judul, 'pelanggan' => $pelanggan]);
        }
    //      function tampilpelanggan()
    //  {
    //     echo "Tampillll";
    //   }
    }
}
