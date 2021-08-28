<?php

namespace App\Http\Controllers;

use App\Models\Corp;
use App\Models\Jobs;
use Illuminate\Http\Request;

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
    public function home()
        {
            $corp = Corp::all();
            $jobs = Jobs::all();
            return view('main.home',compact('corp', 'jobs'));
            // return view('main.home');
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
}