<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\pelanggan;

class pelanggancontroller extends Controller
{
    function tampilpelanggan()
    {
        $judul = "Selamat Datang";
        $pelanggan = DB::table('pelanggan')->get();

       // $pelanggan = DB::where('Id' , Auth::user()->id)->get();
        return view('pelanggan' , ['judul' => $judul, 'pelanggan' => $pelanggan]);
        }
        //  function tampilpelanggan()
        // {
        //  echo "Tampillll";
        // }
        function deletepelanggan($id){
            $deleted=DB::table('pelanggan')->where('PelangganID', $id)->delete();
            if($deleted){
               return redirect()->back();
            }
        }
        function prosespelanggan()
    {
        $isi = "Tambah Pelanggan";

        return view('tambahpelanggan', ['isi' => $isi]);
    }
        function tambahpelanggan(Request $request)
        {
         //validasi
        // $request->validate();
        // return Auth::user();
        // $isipengaduan = $request->isilaporan;
        $tambahpelanggan = $request->nama_pelanggan;
        $tambahalamat = $request->alamat;
        $tambahnotelp = $request->no_telp;

        // return ([$tambahpelanggan, $tambahalamat, $tambahnotelp]);

        DB::table('pelanggan')->insert([
            'NamaPelanggan' => $tambahpelanggan,
            'Alamat' => $tambahalamat,
            'NomorTelepon' => $tambahnotelp,
        ]);
        return redirect('/pelanggan');
        }
        function update_pelanggan($id)
        {
             $pelanggan = DB::table('pelanggan')->where('PelangganID' , $id)->first();
            return view('updatepelanggan' , ['pelanggan' => $pelanggan]);
        }

        function proses_update_pelanggan(Request $request, $id){

            $Nama_Pelanggan = $request->NamaPelanggan;
            $Alamat = $request->Alamat;
            $No_telp = $request->No_telp;

        // return ([$Nama_Pelanggan, $Alamat, $No_telp]);

            DB::table('pelanggan')
            ->where('PelangganID' , $id)
            ->update(['NamaPelanggan' => $Nama_Pelanggan, 'Alamat' => $Alamat, 'NomorTelepon' => $No_telp]);

        return redirect('/pelanggan');
        }
}
