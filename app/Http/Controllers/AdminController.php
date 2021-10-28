<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Corp;
use App\Models\Jobs;
use App\Models\Candidate;
use App\Models\User;
use App\Models\JobVacancy;
use Alert;



class AdminController extends Controller
{
    public function admin()
    {
        $corp = Corp::count();
        $jobs = Jobs::count();
        $candidate = Candidate::count();
        $user = User::count();
        return view('admin.dashboard',compact('corp', 'jobs', 'candidate', 'user'));
    }

    public function dashboard()
    {
        $corp = Corp::count();
        $jobs = Jobs::count();
        $candidate = Candidate::count();
        $user = User::count();
        return view('admin.dashboard',compact('corp', 'jobs', 'candidate', 'user'));
    }

    public function company()
    {
        $i = 0;
        $i++;
        $corp = Corp::all();
        return view('admin.company', compact(['corp', 'i']));
    }

    public function jobs(Request $request)
    {
        $i = 0;
        $i++;
        $jobs = DB::table('jobs')
        ->join('corp', 'corp.id', '=', 'jobs.corp_id')
        ->select('corp.id', 'corp.nama_corp', 'jobs.corp_id', 'jobs.description_job', 'jobs.position',
        'jobs.last_education', 'job_type', 'job_category', 'jobs.deadline', 'jobs.provinces', 'jobs.city', 'jobs.starting_salary','jobs.final_salary', 'jobs.kuota', 'jobs.gender',
         'jobs.age', 'jobs.location', 'jobs.syarat', 'jobs.email', 'jobs.telp', 'jobs.created_at', 'jobs.updated_at')
        ->get();

        // -- start --
        // get seluruh list provinsi dari helper rajaongkir-nya
        $listProvinces = rajaongkir_point( 'province', 'GET', [] );
        // get seluruh list provinsi dari helper rajaongkir-nya
        $listCity = rajaongkir_point( 'city', 'GET', [] );

        // dd($listCity);
        // ambil data id provinsi, untuk memudahkan pencarian provinsi
        $listProvinceIds = array_column($listProvinces, 'province_id');
         // ambil data id city, dari id provinsi untuk memudahkan pencarian provinsi
         $listCityIds = array_column($listCity, 'city_id');
        // dd($listCityIds);
        // loop data jobs
        foreach ($jobs as $key => $job) {
            // set default province-name
            $provinceName = "( Provinsi tidak ditemukan )";
            // set default province-name
            $cityName = "( Kota tidak ditemukan )";
            // ambil id provinsi dari data "job"
            $jobProvinceId = $job->provinces;
            // ambil id kota dari data provinsi "job"
            $jobCityId = $job->city;
            // dd($jobCityId);
            // cari data nama provinsi berdasarkan id
            $provinceIndex = array_search($jobProvinceId, $listProvinceIds);
            // cari data nama kota berdasarkan id
            $cityIndex = array_search($jobCityId, $listCityIds);
            // dd($cityIndex);

            if ($provinceIndex) {
                $provinceName = $listProvinces[$provinceIndex]->province ?? $provinceName;
                // dd($provinceName);
            }

            if ($cityIndex) {
                $cityName = $listCity[$cityIndex]->city_name ?? $cityName;
                // dd($cityName);
            }

            // update data jobs dengan menambahkan nama provinsi
            $job->province_name = $provinceName;
            $job->city_name = $cityName;

            // dd($cityName);
            // dd($job);
        }
        // -- end --
// dd($jobs);
        return view('admin.jobs', compact(['jobs', 'i']));
    }


    public function kandidat()
    {
        $i = 0;
        $i++;
        // $candidate = candidate::latest()->get();
        $candidate = DB::table('candidates')
        ->join('users', 'users.id', '=', 'candidates.user_id')
        ->join('apply_jobs', 'apply_jobs.id', '=', 'candidates.apply_jobs_id')
        ->join('jobs', 'jobs.id', '=', 'apply_jobs.job_id')
        ->select('users.id', 'users.name', 'users.address', 'apply_jobs.cv','jobs.position', 'candidates.status', 'candidates.id')
        ->get();

        return view('admin.candidate', compact(['candidate', 'i']));
    }

    public function user()
    {
        $i = 0;
        $i++;
        $users = User::all();
        return view('admin.users', compact(['users', 'i']));
    }

    public function opencv($id)
    {
        $path = public_path('CV/' . $id . '.pdf');
        header("Content-type: application/pdf");
        header("Content-Length: " . filesize($path));
        readfile($path);
    }

}
