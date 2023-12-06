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
    $tambahproduk = $request->nama_produk;
    $tambahharga = $request->harga;
    $tambahstok = $request->stok;

    // return ([$tambahproduk, $tambahharga, $tambahstok]);

    DB::table('produk')->insert([
        'NamaProduk' => $tambahproduk,
        'Harga' => $tambahharga,
        'Stok' => $tambahstok,
    ]);
    return redirect('/produk');
    }

    function update_produk($id)
        {
             $produk = DB::table('produk')->where('ProdukID' , $id)->first();
            return view('updateproduk' , ['produk' => $produk]);
        }

        function proses_update_produk(Request $request, $id){

            $Nama_Produk = $request->NamaProduk;
            $Harga = $request->Harga;
            $Stok = $request->Stok;

        // return ([$Nama_Produk, $Harga, $Stok]);

            DB::table('produk')
            ->where('ProdukID' , $id)
            ->update(['NamaProduk' => $Nama_Produk, 'Harga' => $Harga, 'Stok' => $Stok]);

        return redirect('/produk');
        }
}

