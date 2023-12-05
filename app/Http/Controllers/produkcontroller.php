<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class produkcontroller extends Controller
{
    function deleteproduk($id){
        $deleted=DB::table('produk')->where('ProdukID', $id)->delete();
        if($deleted){
           return redirect()->back();
        }
    }
    function prosesproduk()
    {
        $isi = "Tambah Produk";

        return view('tambahproduk', ['isi' => $isi]);
    }
    function tambahproduk(Request $request)
    {
     //validasi
    // $request->validate();
    // return Auth::user();
    // $isipengaduan = $request->isilaporan;
    $tambahproduk = $request->NamaProduk;
    $tambahharga = $request->Harga;
    $tambahstok = $request->Stok;

    DB::table('produk')->insert([
        'NamaProduk' => $tambahproduk,
        'Harga' => $tambahharga,
        'Stok' => $tambahstok,
    ]);
// return redirect('/tampilproduk');
    }
    function update_produk(Request $request, $id){

        //return;
        $stok = $request->stok;

        DB::table('produk')
        ->where('ProdukID' , $id)
        ->update(['produk' => $stok]);

    return redirect('/tampilproduk');
    }
}

