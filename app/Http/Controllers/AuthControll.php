<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AuthControll extends Controller
{
    function register(){
        return view('register');
    }
    function store(Request $request){
        var_dump($request->all());
        //masukan data

        $data = DB::table("user")->insert([
            'id' => $request ->Id,
            'name' => $request ->name,
            'username' => $request ->username,
            'password' => Hash::make($request->password),
            'user' => 'admin'
        ]);
        return redirect('/login');

    }
}

