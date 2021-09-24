<?php

namespace App\Http\Controllers;

use App\Models\Corp;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            // menampilkan tabel corps dan jobs
            // $corps = Corp::get();
            $jobs = Jobs::with('corp')->get();
            return view('main.home',compact('jobs'));
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

    // public function login()
    // {
    //     return view('main.login');
    // }

    // public function signup()
    // {
    //     return view('main.signup');
    // }

    public function lihatjobs(Request $request){

        //untuk merelasikan tabel corp dgn jobs |
        // $jobs = Jobs::with('corp')->get();
        // return view('user.findjobs',compact('jobs'));

        // $id = DB::table('jobs')
        // ->where('id_jobs', $id_jobs)->first();

        $lihatjobs = DB::table('jobs')
        ->select('id', 'job_type', 'created_at', 'position', 'city', 'provinces', 'salary_range' )
        ->get();

        // $logo = DB::table('companies')->select('logo')
        // ->get();

        // $namacorp = DB::table('job_id')->select('corp_id')
        // ->get();


        return view('main.findjobs',
        ['lihatjobs'=> $lihatjobs]);
    }

}