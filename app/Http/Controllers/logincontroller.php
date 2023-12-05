<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    function login(){
        // return Hash::make ("123");
        $login = "login";
        return view("/login" , ['login'=>$login]);
    }
    function proseslogin(Request $request){
        $request->validate([
            'login' => 'required|min:2'
           ]);

    $datalogin = $request->only("username" , "password"); //buat ambil data
    if (Auth::attempt($datalogin))
     { //proses login
        //return "berhasil";
        return redirect('/home');
    // }else{
       // return "gagal";
        return redirect('/login')->with("error", "username atau password salah");
    }
}

    function logout(){
         Auth::logout();

         return redirect('/login');
    }
}
