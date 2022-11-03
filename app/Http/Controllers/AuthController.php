<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function cek_login(Request $request)
    {
        $password = $request->input('password');


        if (Auth::attempt(['password' => $password])) 
        {
            return redirect()->intended('/home')->with('succes', 'Login Berhasil');
        }
        else 
        {
            return redirect()->intended('/')->with('error', 'Username atau Password Salah');
        }

    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
