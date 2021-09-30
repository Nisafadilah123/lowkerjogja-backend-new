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
            $lihatjobs = DB::table('jobs')
        ->join('corp', 'corp.id', '=', 'jobs.corp_id')
        ->select('corp.nama_corp', 'corp.logo', 'jobs.id', 'jobs.job_type',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
        'jobs.city', 'jobs.provinces', 'jobs.salary_range')
        ->get();

        return view('main.home',
        ['lihatjobs'=> $lihatjobs]);
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


    public function lihatjobs(Request $request){
        $lihatjobs = DB::table('jobs')
        ->join('corp', 'corp.id', '=', 'jobs.corp_id')
        ->select('corp.nama_corp', 'corp.logo', 'jobs.id', 'jobs.job_type',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
        'jobs.city', 'jobs.provinces', 'jobs.salary_range')
        ->get();

        return view('main.findjobs',
        ['lihatjobs'=> $lihatjobs]);
    }

    public function detailmain($id)
    {
        $jobs = DB::table('jobs')
        ->join('corp', 'corp.id', '=', 'jobs.corp_id')
        ->select('corp.nama_corp', 'corp.description', 'corp.logo', 'jobs.description_job', 'jobs.id', 'jobs.job_type',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
        'jobs.city', 'jobs.provinces', 'jobs.salary_range', 'jobs.gender', 'jobs.age', 'jobs.location', 'jobs.syarat', 'jobs.email', 'jobs.telp', 'jobs.deadline')
        ->where('jobs.id', $id)
        ->get();
        return view('main.detailmain', ['jobs' => $jobs]);
    }

}