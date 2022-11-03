<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function cek_login(Request $request)
    {
        // $password = $request->input('password');

        $credential = $request->only('name','password');
        if (Auth::attempt($credential))
        {
            $user = Auth::user()->level;
            if ($user == 'admin') {
                return redirect()->route('admin');
            } else {
                return redirect()->route('user');
            }

            // return redirect()->route('')->with('succes', 'Login Berhasil');
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
