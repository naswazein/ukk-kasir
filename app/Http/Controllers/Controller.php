<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    function login()
    {
        // return Hash::make ("123");
        return view ("login");
    }
    public function index ()
    {
        $judul = "welcome";
        //$kasir = DB::table('')->get();
        return view('home', ['TextJudul' =>$judul]);
    }
    function produk()
    {
        $judul = "Selamat Datang";
        $produk = DB::table('produk')->get();

        $produk = Produk::where('nik' , Auth::user()->nik)->get();
        return view('home' , ['judul' => $judul, 'produk' => $produk]);
        }

























































































































































































































        // function tampilproduk(){
        //     echo "Tampillll";
        //   }
}
