<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class penjualancontroller extends Controller
{
    function tampilpenjualan()
    {
        $judul = "Selamat Datang";
        $penjualan = DB::table('penjualan')
        ->join('pelanggan' , 'penjualan.PenjualanID', '=', 'pelanggan.PelangganID')
        ->get();

       // $penjualan = DB::where('Id' , Auth::user()->id)->get();
        return view('datapenjualan' , ['judul' => $judul, 'penjualan' => $penjualan]);
        }
        //  function tampilpenjualan()
        // {
        //  echo "Tampillll";
        // }
        function detailpenjualan($id)
    {
        echo $id;
    }
    function detailpengaduanP($id)
    {
        $petugas = DB::table('pengaduan')
            ->where('id_pengaduan', $id)
            ->first();
        return view('detailpengaduanP', ['pengaduan' => $petugas]);
    }
    // function detailpengaduan($id)
    // {
    //     $pengaduan = pengaduan::where('id_pengaduan', $id)->first();
    //     //$tanggapan = tanggapan::where('id_pengaduan' , $id)->get();
    //     $tanggapan = DB::table('tanggapan')
    //         ->join('petugas', 'petugas.id', '=', 'tanggapan.id_petugas')
    //         ->where('tanggapan.id_pengaduan', $id)
    //         ->get();

    //     //return $tanggapan;
    //     return view('detailpengaduanP', ['data' => $pengaduan]);
    // }
}
