<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    //
    public function authenticate(Request $request){
        // Inputan yg diambil
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login

            alert()->error('Error', 'Kamu harus login dulu');

            return redirect('login');
            //return redirect()->intended('/details');
        }
        // Jika Gagal
        return redirect('login');
    }

    public function index(){
        if(!Session::get('login')){
            alert()->error('Error', 'Kamu harus login dulu');

            return redirect('login');
        }
        else{
            return view('user');
        }
    }
}
