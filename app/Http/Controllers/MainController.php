<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helper;
class MainController extends Controller
{

    public function provinsi(){
        $hasil = rajaongkir_point("province");
        return response()->json($hasil);
    }

    public function kota(Request $request){
        $hasil = rajaongkir_point("city",["province=$request->prov_id"]);
        return response()->json($hasil);
    }
    //
    public function index()
    {
        return view('main.home');
    }

    public function about()
    {
        return view('main.about');
    }

    public function findjobs()
    {
        return view('main.findjobs');
    }

    public function succes()
    {
        return view('main.succes');
    }

    public function login()
    {
        return view('main.login');
    }

    public function signup()
    {
        return view('main.signup');
    }


    public function registrasi()
    {
        return view('auth.register-ajax');
    }
}